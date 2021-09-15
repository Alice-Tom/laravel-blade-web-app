<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Recruiter
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
        if(auth()->user()->account_type == 'recruiter'){
            return $next($request);
        }
        return redirect()->to('/');
    }
}
