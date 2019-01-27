<?php

namespace App\Http\Middleware;

use Closure;

class RedirectIfNotBagian
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
        if(!auth()->guard('bagian')->check()) {
            return redirect(route('bagian.login.get'));
        }
        return $next($request);
    }
}
