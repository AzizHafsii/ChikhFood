<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactMessage; // Assuming you have a model for storing contact messages

class ContactController extends Controller
{
    public function create()
    {
        return view('contact.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:15', // Add validation for phone
            'message' => 'required|string',
        ]);
    
        ContactMessage::create($validatedData);
    
        return redirect()->route('contact.create')->with('success', 'Your message has been sent successfully!');
    }
    
}