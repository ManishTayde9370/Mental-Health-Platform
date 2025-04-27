<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage; 

use Illuminate\Http\Request;

class ContactController extends Controller
{
    // Show the contact form
    public function showContactForm()
    {
        return view('contact'); // Assuming 'contact' is your Blade view file
    }
public function submitContactForm(Request $request)
{
    // Validate form data
    $validated = $request->validate([
        'name' => 'required|max:255',
        'email' => 'required|email',
        'message' => 'required',
    ]);

    // Save to database
    ContactMessage::create($validated);

    // Return back with success message
    return back()->with('success', 'Your message has been sent successfully!');
}

}
