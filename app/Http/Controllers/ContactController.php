<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        // Validate the form input
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string',
            'message' => 'required|string',
        ]);

        // Send the email
        Mail::to('your-email@example.com')->send(new ContactFormMail($validatedData));

        // Optionally, return a success message or redirect
        return redirect()->back()->with('success', 'Thank you for contacting us. We will follow up soon.');
    }
}
