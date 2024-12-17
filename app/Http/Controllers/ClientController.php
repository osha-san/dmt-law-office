<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client; // Ensure Client model is imported
use Illuminate\Support\Facades\Log;

class ClientController extends Controller
{
    public function register(Request $request)
    {
        try {
            // Log incoming data for debugging
            Log::info('Incoming client data:', $request->all());

            // Validate request data
            $validated = $request->validate([
                'first_name' => 'required|string|max:255',
                'last_name' => 'required|string|max:255',
                'address' => 'required|string|max:500',
                'email' => 'required|email|unique:clients,email|max:255',
                'contact_number' => 'required|digits_between:10,15',
                'password' => 'required|string|min:8|confirmed',
            ]);

            // Insert client into the database
            $client = Client::create([
                'first_name' => $validated['first_name'],
                'last_name' => $validated['last_name'],
                'address' => $validated['address'],
                'email' => $validated['email'],
                'contact_number' => $validated['contact_number'],
                'password' => bcrypt($validated['password']),
            ]);

            // Return success response
            return response()->json(['message' => 'Client registered successfully!', 'data' => $client], 201);

        } catch (\Exception $e) {
            // Log error for debugging
            Log::error('Error storing client:', ['error' => $e->getMessage()]);
            return response()->json(['message' => 'An error occurred while registering.'], 500);
        }
    }
}

