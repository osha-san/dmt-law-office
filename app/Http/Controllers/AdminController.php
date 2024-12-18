<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;
use App\Models\Client;
use App\Models\Invoice;
// Fetch appointments
use App\Models\Appointment;

class AdminController extends Controller
{
    /**
     * Show the admin login form
     */
    public function showLoginForm()
    {
        return view('login-admin');
    }

    /**
     * Handle the admin login
     */
    public function login(Request $request)
    {
        // Validate the login input
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:6',
        ]);

        // Attempt to log in using the 'admin' guard
        if (Auth::guard('admin')->attempt($credentials)) {
            // Regenerate the session
            $request->session()->regenerate();

            // Redirect to the admin dashboard
            return redirect()->intended('/admin/dashboard');
        }

        // If login fails, return with an error message
        return back()->withErrors([
            'email' => 'Invalid credentials.',
        ])->onlyInput('email');
    }

    /**
     * Display the admin dashboard
     */
    public function dashboard()
    {
        // Fetch 5 upcoming appointments
        $appointments = Appointment::orderBy('date', 'asc')->take(5)->get();

        return view('admin-dashboard', ['appointments' => $appointments]);
    }

    public function appointments()
    {
        $appointments = Appointment::all();
        return view('admin-appointment', ['appointments' => $appointments]);
    }

    public function clients()
    {
        // Fetch data if necessary from the database
        $clients = Client::all(); // Assuming you have a Client model

        return view('admin-clients', ['clients' => $clients]);
    }

    public function bills()
    {
        // Fetch invoices from the database
        $invoices = Invoice::all(); // Assuming an Invoice model is used
        return view('admin-billing', compact('invoices'));
    }

    public function calendar()
    {
        // Fetch invoices from the database
       // $invoices = Invoice::all(); // Assuming an Invoice model is used
        return view('admin-calendar', compact('calendar'));
       // return view('admin-calendar');
    }

    public function caseLibrary()
{
    // Example data (replace with real database logic later)
    $cases = [
        ['title' => 'Case 1', 'description' => 'Case description 1'],
        ['title' => 'Case 2', 'description' => 'Case description 2'],
    ];
    return view('admin-case-library', ['cases' => $cases]);
}


    /**
     * Log the admin out
     */
    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();

        // Invalidate the session
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/admin/login');
    }
}
