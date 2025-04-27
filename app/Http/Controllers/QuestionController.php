<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question; // Add this line to use the Question model

class QuestionController extends Controller
{
    // Store the question submitted by the user
    public function store(Request $request)
    {
        // Validate the form data
        $request->validate([
            'question' => 'required|string|max:500',
        ]);

        // Store the question in the database
        Question::create([
            'question' => $request->input('question'),
        ]);

        // Flash a success message
        return back()->with('success', 'Your question has been submitted successfully.');
    }
}
