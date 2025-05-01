<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class AdminServiceController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'admin']); // Tu dois créer un middleware 'admin'
    }

    // Liste des services en attente
    public function pending()
    {
        $services = Service::pending()->with('user')->latest()->paginate(10);
        return view('admin.services.pending', compact('services'));
    }

    // Approuver un service
    public function approve(Service $service)
    {
        $service->update(['status' => 'approved']);

        // Notifier le prestataire
        // $service->user->notify(new ServiceStatusChanged($service)); 

        return back()->with('success', 'Service approuvé avec succès');
    }

    // Rejeter un service
    public function reject(Request $request, Service $service)
    {
        $validated = $request->validate([
            'admin_comment' => 'required|string'
        ]);

        $service->update([
            'status' => 'rejected',
            'admin_comment' => $validated['admin_comment']
        ]);

        // Notifier le prestataire
        // $service->user->notify(new ServiceStatusChanged($service));

        return back()->with('success', 'Service rejeté avec succès');
    }
}
