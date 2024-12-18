<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Document;

class LogbookController extends Controller
{
    public function index()
    {
        $outgoingDocuments = Document::where('type', 'outgoing')->orderBy('date', 'desc')->get();
        $incomingDocuments = Document::where('type', 'incoming')->orderBy('date', 'desc')->get();

        return view('admin-logbook', compact('outgoingDocuments', 'incomingDocuments'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'document' => 'required|file',
            'date' => 'required|date',
            'type' => 'required|in:incoming,outgoing',
        ]);

        $path = $request->file('document')->store('documents', 'public');

        Document::create([
            'name' => $request->file('document')->getClientOriginalName(),
            'url' => "/storage/{$path}",
            'date' => $validated['date'],
            'type' => $validated['type'],
        ]);

        return redirect()->route('admin.logbook')->with('success', 'Document added successfully!');
    }
}
