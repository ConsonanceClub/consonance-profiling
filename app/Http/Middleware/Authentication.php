<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class Authentication
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
        if(!Auth::check()){
            return redirect()->route('home');
        }

        return $next($request);
    }
}
