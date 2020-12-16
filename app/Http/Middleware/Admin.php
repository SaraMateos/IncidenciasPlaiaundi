<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Illuminate\Http\Request;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next) {

        $user = Auth::user();
        $admin = ($user->es_admin);

        if ($admin == 1) {
            return redirect('homeAdmin');
        }

        return $next($request);
    }
}
