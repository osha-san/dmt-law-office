<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Calendar;

class CalendarController extends Controller
{
    // Display the calendar page with events
    public function index()
    {
        $events = Calendar::orderBy('date', 'asc')->get();

        return view('admin-calendar', ['events' => $events]);
    }

    // Store a new calendar event
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'date' => 'required|date',
            'time' => 'nullable|date_format:H:i',
            'location' => 'nullable|string|max:255',
            'description' => 'nullable|string',
        ]);

        Calendar::create($validated);

        return redirect()->route('admin.calendar')->with('success', 'Event added successfully.');
    }
}
