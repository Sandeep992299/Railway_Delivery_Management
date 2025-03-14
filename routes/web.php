<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ParcelController;
use App\Http\Controllers\GovStockController;
use App\Http\Controllers\FuelController;

// Route to show the loading page
Route::get('/', function () {
    return view('loading'); // Display the loading page when the user visits the homepage
});


// Route for the login page
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');

// Handle the login post request
Route::post('/login', [AuthController::class, 'login']);

// Route for the registration page
Route::get('/register', function () {
    return view('register'); 
})->name('register');

Route::post('/register', [RegisterController::class, 'register'])->name('register');



// Route for the dashboard after login
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth'); // Ensure this route is protected with authentication

// Route for customer parcel management
Route::get('/customer-parcel', [ParcelController::class, 'index'])->middleware('auth');

// Route for government stock management
Route::get('/gov-stock', [GovStockController::class, 'index'])->middleware('auth');

// Route for fuel stock management
Route::get('/fuel', [FuelController::class, 'index'])->middleware('auth');

// Route for parcel tracking
Route::get('/tracking', [ParcelController::class, 'track'])->middleware('auth');

// Route for notifications
Route::get('/notifications', [ParcelController::class, 'notifications'])->middleware('auth');

// Route for reports
Route::get('/reports', [DashboardController::class, 'reports'])->middleware('auth');

// Logout route
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');

