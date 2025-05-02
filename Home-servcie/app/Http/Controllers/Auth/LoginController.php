<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        // Tentative d'authentification
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Vérification du rôle et redirection
            if (auth()->user()->role === 'provider') {
                return redirect()->route('provider.dashboard');
            }

            if (auth()->user()->role === 'admin') {
                return redirect()->route('admin.services.pending');
            }

            if (auth()->user()->role === 'client') {
                return redirect()->route('home');
            }
        }

        return back()->withErrors([
            'email' => 'Email ou mot de passe invalide',
        ]);
    }

    public function logout()
    {
        Auth::logout();

        return response()->json([
            'status' => 'success',
            'message' => 'Successfully logged out',
        ]);
    }
}
