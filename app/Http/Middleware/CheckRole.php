<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    public function handle($request, Closure $next, ...$roles)
    {
        if (!Auth::check()) {
            return redirect('/login');
        }

        $user = Auth::user();
        $userRole = $user->role->name; // Mengakses nama peran dari relasi role pada model User

        if (!in_array($userRole, $roles)) {
            return redirect('/dashboard'); // Redirect ke dashboard jika peran tidak sesuai
        }

        return $next($request);
    }
}


