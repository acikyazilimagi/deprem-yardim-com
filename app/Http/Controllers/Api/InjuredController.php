<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Injured;
use Illuminate\Support\Arr;

class InjuredController extends Controller
{
    public function all()
    {
        $data = Injured::when(
            filled(request()->get('text')),
            fn($query) => $query->whereFullText('address', request()->get('text'))
        )
            ->select([
                'id',
                'city',
                'district',
                'street as neighbourhood',
                'fullname',
                'street2 as street',
                'apartment as apartment_name',
                'apartment_no',
                'apartment_floor',
                'source',
                'phone',
                'address as request',
                'maps_link',
                'ip_address',
                'created_at',
                'updated_at',
            ])
            ->paginate(2000)
            ->toArray();

        return response()->json(array_merge([
            'status' => 'success',
            ...Arr::except($data, 'links')
        ]));
    }
}
