<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class checkLogin
{
    
    public function handle(Request $request, Closure $next)
    {
        if(Auth::guard('admin')->check()){
            return redirect('dashboard');
        }
        return $next($request);
    
    }
}
