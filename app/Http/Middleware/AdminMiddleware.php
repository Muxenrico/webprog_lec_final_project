<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        
        // belum login redirect to login
        if(!Auth::check()){
            return redirect()->route('index_login');
        }

        //Jika bukan admin, back to Welcome
        if(Auth::user()->type == 'member'){
            return redirect()->route('index_member');
        }
        
        //Check Role
        //Auth::user()-role()
        return $next($request);
    }
}
