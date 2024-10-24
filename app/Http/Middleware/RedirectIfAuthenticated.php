<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
        public function handle($request, Closure $next, ...$guards)
        {
            if (Auth::check()) {
                return redirect()->route('home.index'); // Redirect to home page or another page
            }

            return $next($request);
        }
}