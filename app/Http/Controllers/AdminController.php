<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;

//for fetching appointments data in the database
use App\Models\Appointment;

class AdminController extends Controller
{
    public function login(Request $request)
    {
        // Validate the input
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:6',
        ]);

        // Fetch the admin user from the database
        $admin = Admin::where('email', $credentials['email'])->first();

        // Check if admin exists and password is correct
        if ($admin && Hash::check($credentials['password'], $admin->password)) {
            // Log the admin in (using custom session)
            session(['admin_id' => $admin->id, 'admin_email' => $admin->email]);
            return redirect()->intended('/admin/dashboard');
        }

        // If credentials are invalid, return an error
        return back()->withErrors(['email' => 'Invalid credentials.'])->onlyInput('email');
    }

    public function showLoginForm()
    {
        return view('login-admin');
    }

    //for fetching data from appointment model
    public function dashboard()
    {
        $appointments = Appointment::orderBy('time', 'asc')->take(5)->get();

        return view('admin-dashboard', ['appointments' => $appointments]);
    }

    public function appointments()
    {
        // Fetch appointments categorized by status
        $todayAppointments = Appointment::whereDate('date', today())->get();
        $upcomingAppointments = Appointment::where('date', '>', today())->get();
        $previousAppointments = Appointment::where('date', '<', today())->get();

        return view('admin-appointments', [
            'todayAppointments' => $todayAppointments,
            'upcomingAppointments' => $upcomingAppointments,
            'previousAppointments' => $previousAppointments,
        ]);
    }


}

