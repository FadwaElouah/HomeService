<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ServiceProviderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // Afficher la page de soumission de service
    public function create()
    {
        return view('services.create');
    }

    // Soumettre un nouveau service
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'phone' => 'required|string|max:20',
            'description' => 'nullable|string',
            'file-upload' => 'required|image|mimes:jpeg,png,jpg,gif|max:5120',
        ]);

        // Traitement de l'image
        $imagePath = $request->file('file-upload')->store('services', 'public');
        $user = User::find(auth()->id());

        // Création du service
        $service = $user->services()->create([
            'title' => $validated['title'],
            'price' => $validated['price'],
            'phone' => $validated['phone'],
            'description' => $validated['description'] ?? null,
            'image_path' => $imagePath,
            'status' => 'pending',
        ]);

        return response()->json(['success' => true]);
    }


    public function dashboard()
    {
        $user = User::find(auth()->id());
        $services = $user->services()->latest()->get();
        return view('public', compact('services'));
    }
}
