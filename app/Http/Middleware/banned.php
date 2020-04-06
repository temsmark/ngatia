<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class banned
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
        Auth::check();
        if (Auth::User()->is_banned==null)
        {
            return $next($request);

        }
        else
        {
            return abort(403,'Access Denied,You have been banned.. From ' .Auth::user()->is_banned.' to  Infinity');
        }
    }
}
