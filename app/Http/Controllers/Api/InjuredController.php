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
            ->paginate(2000)
            ->toArray();

        return response()->json(array_merge([
            'status' => 'success',
            ...Arr::except($data, 'links')
        ]));
    }
}
