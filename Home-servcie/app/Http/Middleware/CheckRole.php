<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next, $role)
    {
        // ✅ Vérifie si l'utilisateur est connecté (authentifié)
        if (!auth()->check()) {
            return redirect()->route('login'); // Rediriger vers la page de connexion s'il n'est pas connecté
        }

        $user = auth()->user();


        if ($user->role !== $role || $user->is_active !== true) {

            abort(403, 'Accès non autorisé. Veuillez contacter l’administration.');
        }

        
        return $next($request);
    }

}

