<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use Illuminate\Support\Facades\Session;

class AssessmentController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function showAssessment()
    {
        return view('assessment');
    }

    public function processAssessment(Request $request)
    {
        $score = array_sum($request->input('responses', []));
        Session::put('score', $score);
        return redirect()->route('results');
    }

    public function showResults()
    {
        $score = Session::get('score', 0);
        return view('results', compact('score'));
    }
}
