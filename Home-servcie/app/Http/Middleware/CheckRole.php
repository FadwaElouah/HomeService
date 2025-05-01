<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    public function handle(Request $request, Closure $next, $role)
    {
        // 1. Vérification de l'authentification
        if (!auth()->check()) {
            return $request->expectsJson()
                ? response()->json(['message' => 'Non authentifié'], 401)
                : redirect()->route('login');
        }

        // 2. Vérification du rôle
        if (auth()->user()->role !== $role) {
            return $request->expectsJson()
                ? response()->json(['message' => 'Accès refusé'], 403)
                : redirect()->route('home')->with('error', 'Vous n\'avez pas l\'autorisation d\'accéder à cette page');
        }

        return $next($request);
    }
}
