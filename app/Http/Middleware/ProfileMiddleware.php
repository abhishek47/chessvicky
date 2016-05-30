<?php

namespace App\Http\Middleware;

use Closure;

class ProfileMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    { 
        if(\Auth::user()->profile_id == 0)
        {
            return redirect('/test');
        }
        return $next($request);
    }
}
