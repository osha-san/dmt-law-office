<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attorney;
use Illuminate\Support\Facades\Log;

class AttorneyController extends Controller
{
    public function register(Request $request)
    {
        try {
            // Validate the incoming request
            $validated = $request->validate([
                'first_name' => 'required|string|max:255',
                'last_name' => 'required|string|max:255',
                'control_number' => 'required|string|unique:attorneys,control_number|max:255',
                'email' => 'required|email|unique:attorneys,email|max:255',
                'password' => 'required|string|min:8|confirmed',
            ]);

            // Create an attorney record
            $attorney = Attorney::create([
                'first_name' => $validated['first_name'],
                'last_name' => $validated['last_name'],
                'control_number' => $validated['control_number'],
                'email' => $validated['email'],
                'password' => bcrypt($validated['password']),
            ]);

            return response()->json(['message' => 'Attorney registered successfully!', 'data' => $attorney], 201);
        } catch (\Exception $e) {
            Log::error('Error registering attorney:', ['error' => $e->getMessage()]);
            return response()->json(['message' => 'An error occurred while registering the attorney.'], 500);
        }
    }
}
