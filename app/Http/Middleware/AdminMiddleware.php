<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        // Vérifie si l'utilisateur est connecté et s'il est admin
        if (Auth::check() && Auth::user()->is_admin) {
            return $next($request);
        }

        // Redirige si l'utilisateur n'est pas admin
        return redirect()->route('plats.index')->with('error', 'Accès non autorisé.');
    }

    protected function redirectTo($request)
    {
        if (!$request->expectsJson()) {
            return route('/plats.index');
        }
    }

}
