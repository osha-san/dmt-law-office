<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\LogbookController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\CaseLibraryController;
use App\Http\Controllers\AdminAppointmentController;

//attorney things
use App\Http\Controllers\AttorneyController;

//Admin Things
use App\Http\Controllers\AdminController;



// Home route - redirect to Admin Login
Route::get('/', [AdminController::class, 'showLoginForm'])->name('home');

// Client registration view
Route::view('/register/client', 'client-register')->name('client.register');

// Attorney registration view
Route::view('/register/attorney', 'attorney-register')->name('attorney.register');

// Client registration form submission
Route::post('/register/client', [ClientController::class, 'register'])->name('client.register.submit');

// Attorney registration form submission
Route::post('/register/attorney', [AttorneyController::class, 'register'])->name('attorney.register.submit');



// Admin Login Routes
Route::prefix('admin')->group(function () {
    Route::get('/login', [AdminController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [AdminController::class, 'login'])->name('admin.login.submit');
});

// Protected Admin Routes (Requires Authentication)
Route::middleware(['auth:admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::post('/logout', [AdminController::class, 'logout'])->name('admin.logout');

    // Define the appointments page
    Route::get('/admin/appointments', [AdminAppointmentController::class, 'index'])->name('admin.appointments');
Route::get('/admin/appointments/review', [AdminAppointmentController::class, 'review'])->name('admin.appointments.review');

    // router for admin-client
    Route::get('/clients', [AdminController::class, 'clients'])->name('admin.clients');

    //router logbook
    Route::get('/logbook', [LogbookController::class, 'index'])->name('admin.logbook');
    Route::post('/logbook/store', [LogbookController::class, 'store'])->name('admin.logbook.store');

    //admin billing routes
    Route::get('/admin/billing', [AdminController::class, 'bills'])->name('admin.bills');

    //admin calendar

    Route::get('/calendar', [CalendarController::class, 'index'])->name('admin.calendar');
    Route::post('/calendar', [CalendarController::class, 'store'])->name('admin.calendar.store');

    //case library
    Route::get('/caselibrary', [CaseLibraryController::class, 'index'])->name('admin.caselibrary');

    //admin client
    Route::get('/clients', [AdminController::class, 'clients'])->name('admin.clients');




});


