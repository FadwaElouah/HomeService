<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function show()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:6',
            'role' => 'required|in:Admin,Provider',
            'phone' => 'required|string',
            'phone_code' => 'required|string',

        ]);

        // Concatenate phone code and phone number
        $fullPhone = '+' . $request->phone_code . $request->phone;

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => strtolower($request->role),
            'phone' => $fullPhone,

        ]);

        return redirect('/login')->with('success', "Inscription réussie !");
    }
}
