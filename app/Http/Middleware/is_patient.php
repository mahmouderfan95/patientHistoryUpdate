<?php

namespace App\Http\Middleware;
use Auth;
use Closure;

class is_patient
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
        if(Auth::guard('patien')->user()['role'] == 'patient'){
            return $next($request);
        }
        return redirect()->route('indexRoute');

    }
}
