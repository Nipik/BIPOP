<?php

namespace App\Http\Middleware;

use Closure;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    public function handle($request, Closure $next): Response
    {
        if(auth()->check() && auth()->user()->role ==='admin')
        {
            return $next($request);
        }
        abort(403,'Unauthorized');
    }

}
