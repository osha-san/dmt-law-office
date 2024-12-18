<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminAppointmentController extends Controller
{
    public function index()
    {
        return view('admin-appointment');
    }

    public function review()
    {
        return view('admin-appointment-review'); // Create another Blade file for reviewing appointments
    }
}
