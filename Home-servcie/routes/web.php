<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ServiceProviderController;
use App\Http\Controllers\AdminServiceController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



use App\Http\Controllers\Auth\RegisterController;

Route::get('/register', [RegisterController::class, 'show'])->name('register.show');
Route::post('/register', [RegisterController::class, 'store'])->name('register');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');

Route::post('/login', [LoginController::class, 'login']);


// Public routes
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/features', [PageController::class, 'features'])->name('features');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::post('/contact', [PageController::class, 'submitContact'])->name('contact.submit');

// Authentication routes (Laravel's built-in auth routes)
Route::middleware(['auth'])->group(function () {
    // Protected routes go here
    Route::get('/dashboard', function () {
        return view('dashboard', [
            'title' => 'Dashboard',
            'appName' => 'Laravel App',
            'companyName' => 'Your Company'
        ]);
    })->name('dashboard');
});// Routes pour les prestataires
Route::middleware(['auth'])->group(function () {
    Route::get('/services/create', [ServiceProviderController::class, 'create'])->name('services.create');
    Route::post('/services', [ServiceProviderController::class, 'store'])->name('services.store');
    Route::get('/provider/dashboard', [ServiceProviderController::class, 'dashboard'])->name('provider.dashboard');
});



Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/services/pending', [AdminServiceController::class, 'pending'])->name('admin.services.pending');
    Route::post('/services/{service}/approve', [AdminServiceController::class, 'approve'])->name('admin.services.approve');
    Route::post('/services/{service}/reject', [AdminServiceController::class, 'reject'])->name('admin.services.reject');
});



