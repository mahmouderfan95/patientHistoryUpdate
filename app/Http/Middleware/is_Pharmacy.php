<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class is_Pharmacy
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
        if(Auth::guard('pharmacy')->user()['role'] == 'pharmacy'){
            return $next($request);
        }
        return redirect()->route('indexRoute');

    }
}
