<?php

namespace App\Console\Commands;

use App\Models\Injured;
use Aws\LocationService\LocationServiceClient;
use Illuminate\Console\Command;

class GenerateInjuredCoordinatesCommand extends Command
{
    protected $signature = 'generate:injured-coordinates';

    protected $description = 'Command description';

    public function handle()
    {
        $locationService = new LocationServiceClient([
            'region' => config('services.aws-location.region'),
            'version' => config('services.aws-location.version'),
            'credentials' => [
                'key' => config('services.aws-location.key'),
                'secret' => config('services.aws-location.secret'),
            ],
        ]);

        $injureds = Injured::whereNull('coordinates')
            ->whereNull('geocode_data')
            ->whereNot('street2', null)
            ->whereNot('street2', '');

        foreach ($injureds->cursor() as $injured) {
            if (!filled(str($injured->street2)->trim()->toString())) {
                continue;
            }

            $results = $locationService->searchPlaceIndexForText([
                'Text' => sprintf('%s %s %s %s', $injured->city, $injured->district, $injured->street, $injured->street2),
                'IndexName' => 'explore.place',
                'FilterCountries' => ['TUR'],
                'FilterBBox' => [
                    26.0433512713, 35.8215347357,
                    44.7939896991, 42.1414848903
                ],
                'MaxResults' => 1,
            ]);

            $result = data_get($results->get('Results'), '0');

            if (filled(data_get($result, 'Place.Geometry.Point'))) {
                $injured->update([
                    'coordinates' => data_get($result, 'Place.Geometry.Point'),
                    'geocode_data' => data_get($result, 'Place')
                ]);
            }
        }
    }
}
