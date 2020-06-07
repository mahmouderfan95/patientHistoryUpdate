<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class is_hosptail
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
        if(Auth::guard('hosptail')->user()['role'] == 'hosptail'){
            return $next($request);
        }
        return redirect()->route('indexRoute');
    }
}
