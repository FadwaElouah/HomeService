<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use  App\Http\Controllers\ServiceController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\AdvertisementController;
use App\Http\Controllers\ReviewController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::prefix('auth')->group(function () {
    Route::post('register', [AuthController::class, 'register']);
    Route::post('login', [AuthController::class, 'login']);
    Route::post('logout', [AuthController::class, 'logout'])->middleware('auth:api');
});
Route::middleware('auth:api')->group(function () {

    Route::resource('services', ServiceController::class);


    Route::resource('bookings', BookingController::class);
    Route::patch('bookings/{booking}/status', [BookingController::class, 'updateStatus']);


    Route::resource('advertisements', AdvertisementController::class);


    Route::resource('reviews', ReviewController::class);


    Route::middleware('admin')->prefix('admin')->group(function () {
        Route::get('users', [AdminController::class, 'getAllUsers']);
        Route::get('dashboard', [AdminController::class, 'getDashboardData']);
        Route::patch('users/{user}/status', [AdminController::class, 'toggleUserStatus']);
    });
});
