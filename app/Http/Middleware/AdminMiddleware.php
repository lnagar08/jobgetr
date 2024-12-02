<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Auth;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::guard('admin')->user() && auth()->guard('admin')->user()->id == 1) {
            return $next($request);
        } else {
            return redirect()->route('admin-login');
        }
    }
}

