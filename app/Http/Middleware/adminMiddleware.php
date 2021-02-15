<?php

namespace App\Http\Middleware;

use App\User;
use Closure;
use Illuminate\Support\Facades\Auth;

class adminMiddleware
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
        $user = User::whereId(Auth::user()->id)->first();
        $filter = $user->roles->role->id;

        if ($filter) {
            if ($filter === 1) {
                return $next($request);
            }
        }
        return abort('403');
    }
}
