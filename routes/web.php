<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\AttorneyController;

// Home route
Route::get('/', function () {
    return view('welcome'); // Ensure this view exists in the resources/views directory
});

// Client registration view
Route::view('/register/client', 'client-register')->name('client.register');

// Attorney registration view
Route::view('/register/attorney', 'attorney-register')->name('attorney.register');

// Client registration form submission
Route::post('/register/client', [ClientController::class, 'register'])->name('client.register.submit');

// Attorney registration form submission
Route::post('/register/attorney', [AttorneyController::class, 'register'])->name('attorney.register.submit');
