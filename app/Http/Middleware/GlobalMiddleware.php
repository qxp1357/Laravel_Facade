<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Services\Custom;

class GlobalMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {

        $response = $next($request);
        Custom::setData('<p>Global Middleware Text</p>');

        return $response;
    }
}
