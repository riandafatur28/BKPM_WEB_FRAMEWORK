<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;
/**
 * @link https://laravel.com/docs/11.x/middleware#defining-middleware dokumentasi terkait middleware
 */
class CheckProfileRoute
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->route() && $request->route()->named('profile')) {
            Log::info('User mengakses halaman profile');
        }
        return $next($request);
    }
}
