<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{public function submit(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone_number' => 'required|string|max:20',
            'message' => 'required|string',
        ]);
    
        Contact::create($request->only('full_name', 'email', 'phone_number', 'message'));
    
        if ($request->ajax()) {
            return response()->json(['success_contact' => true]);
        }
    
        return back()->with('success', 'Message sent successfully!');
    }
    
}
