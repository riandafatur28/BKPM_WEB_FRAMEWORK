<?php

namespace App\Http\Middleware;

use Closure;


class StartSession
{
   public function handle($request, Closure $next)
    {
        return $next($request);
    }

    public function terminate($request, $response)
    {

    }
}
