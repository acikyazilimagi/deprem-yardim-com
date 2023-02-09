<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Injured;

class InjuredController extends Controller
{
    public function all()
    {
        return array_merge([
            'error' => false,
            ... Injured::paginate(2000)->toArray()
        ]);
    }
}
