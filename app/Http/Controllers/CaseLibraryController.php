<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CaseLibraryController extends Controller
{
    public function index()
    {
        // You can fetch case data dynamically from the database if needed.
        return view('admin.caselibrary');
    }
}
