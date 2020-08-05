<?php

namespace App\Http\Middleware;

use Carbon\Carbon;
use Closure;

class CheckAge
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
        $age = Carbon::parse($request->birth)->age;
        if($age < 18){
            echo 'wrong age';
            return back();
        } else
            return $next($request);
    }
}
