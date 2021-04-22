<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class TerminableMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        return $next($request);
    }
    public function terminate($request, $response)
    {
        session()->put('res', 'OK');
        session()->save;
    }
}
