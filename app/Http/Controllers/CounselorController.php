<?php

namespace App\Http\Controllers;
use App\Models\Counselor;


use Illuminate\Http\Request;

class CounselorController extends Controller
{
    public function index()
    {
        $counselors = Counselor::all();
        return view('counselors.index', compact('counselors'));
    }

    public function show($id)
    {
        $counselor = Counselor::findOrFail($id);
        return view('counselors.show', compact('counselor'));
    }
}
