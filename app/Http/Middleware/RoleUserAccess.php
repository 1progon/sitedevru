<?php

namespace App\Http\Middleware;

use App\Model\User\User;
use Closure;

class RoleUserAccess
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        if (auth()->user()->role === intval($role)) {
            return $next($request);
        }
        return redirect()->route('homepage');
    }
}
