<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ApiTokenMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (!in_array($request->get('api_key'), getApiKeys())) {
            return response()->json(['status' => 'error', 'message' => 'Unauthorized'], 401);
        }

        return $next($request);
    }
}
