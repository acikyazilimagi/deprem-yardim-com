<?php

namespace App\Http\Controllers;

use App\Models\Injured;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function __invoke()
    {
	info(request()->headers);
        $pageViews = 0; //rescue(fn () => Cache::remember('cf_page_views', now()->addHour(), fn () => $this->getCloudflareAnalytics()), 0) ?? 0;

        $injuredCities = Injured::select('city', DB::raw('count(*) as total'))
            ->activeCities()
            ->groupBy('city')
            ->orderBy('total', 'desc')
            ->get();

        return view('index', compact('injuredCities', 'pageViews'));
    }

    public function getCloudflareAnalytics()
    {
        $client = new Client();

        $body = '{"query":"query {\\n  viewer {\\n    zones(filter: {zoneTag: \\"87234d97ad56addbed3529e4598a5e74\\" })\\n  \\t{\\n      httpRequests1dGroups(\\n        filter: {\\n          date_gt : \\"__DATE__\\",\\n        }\\n        orderBy: [date_ASC]\\n        limit: 10000\\n      ) {\\n        dimensions { date }\\n        sum {\\n          requests,\\n          pageViews\\n        }\\n      }\\n    }\\n  }\\n}","variables":{}}';

        $req = $client->post('https://api.cloudflare.com/client/v4/graphql', [
            'body' => str_replace('__DATE__', now()->subDay()->format('Y-m-d'), $body),
            'headers' => [
                'Authorization' => 'Bearer '.config('services.cloudflare.key'),
                'Content-Type' => 'application/json',
            ],
        ]);

        $res = json_decode($req->getBody()->getContents());

        if (! data_get($res, 'errors') == null) {
            return 0;
        }

        return data_get($res, 'data.viewer.zones.0.httpRequests1dGroups.0.sum.pageViews');
    }
}
