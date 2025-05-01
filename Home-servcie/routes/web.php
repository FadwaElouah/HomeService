<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\{LoginController, RegisterController};
use App\Http\Controllers\{
    PageController,
    ServiceProviderController,
    AdminServiceController
};

// Public routes
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/features', [PageController::class, 'features'])->name('features');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::post('/contact', [PageController::class, 'submitContact'])->name('contact.submit');

// Authentication routes
Route::get('/register', [RegisterController::class, 'show'])->name('register.show');
Route::post('/register', [RegisterController::class, 'store'])->name('register');
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

// Authenticated users routes
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard', [
            'title' => 'Dashboard',
            'appName' => 'Laravel App',
            'companyName' => 'Your Company'
        ]);
    })->name('dashboard');
});

// Service Provider routes
Route::middleware(['auth', 'verified', 'provider'])->group(function () {
    Route::prefix('services')->group(function () {
        Route::get('/create', [ServiceProviderController::class, 'create'])->name('services.create');
        Route::post('/', [ServiceProviderController::class, 'store'])->name('services.store');
    });

    Route::get('/provider/dashboard', [ServiceProviderController::class, 'dashboard'])
         ->name('provider.dashboard');
});

// Admin routes
Route::middleware(['auth', 'verified', 'admin'])->prefix('admin')->group(function () {
    Route::prefix('services')->group(function () {
        Route::get('/pending', [AdminServiceController::class, 'pending'])
             ->name('admin.services.pending');

        Route::post('/{service}/approve', [AdminServiceController::class, 'approve'])
             ->name('admin.services.approve');

        Route::post('/{service}/reject', [AdminServiceController::class, 'reject'])
             ->name('admin.services.reject');
    });
});
