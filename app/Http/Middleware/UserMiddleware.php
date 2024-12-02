<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
use Auth;

class UserMiddleware
{
        public function handle(Request $request, Closure $next)
        {
            if (Auth::guard('web')->check() && Auth::guard('web')->user()->status == 1) {
                Auth::guard('web')->logout(); // Log out the user
                return response()->view('auth.login', ['error' => 'Whoops! Your account is temporarily suspended. Please contact the support team.']);
            } else {
                return $next($request);
            }
        }
}
