<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Services\Custom;

class LocalMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        Custom::setData(sprintf("%s + %s (%s)",
        Custom::getData(),
        "여기는 로컬미들웨어",
        $request->route()->getName()
    ));
    return $next($request);
}
}
