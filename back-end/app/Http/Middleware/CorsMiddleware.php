<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CorsMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // $response = $next($request);

        // return $response->withHeaders([
        //     'Access-Control-Allow-Origin' => 'http://localhost:4200',
        //     'Access-Control-Allow-Methods' => 'GET, POST, PUT, DELETE, OPTIONS',
        //     'Access-Control-Allow-Headers' => 'Content-Type, Authorization',
        // ]);
    }
}
