<?php

use App\Http\Controllers\AssessmentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecommendationController;
use App\Http\Controllers\CounselorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\QuestionController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [AssessmentController::class, 'index'])->name('home');
Route::get('/assessment', [AssessmentController::class, 'showAssessment'])->name('assessment');
Route::post('/assessment', [AssessmentController::class, 'processAssessment'])->name('process.assessment');
Route::get('/results', [AssessmentController::class, 'showResults'])->name('results');
Route::get('/recommendations', [RecommendationController::class, 'index'])->name('recommendations');



Route::get('/contact', [ContactController::class, 'index'])->name('contact');



// Route to show the contact form
Route::get('/contact', [ContactController::class, 'showContactForm'])->name('contact');

// Route to handle the form submission
Route::post('/contact', [ContactController::class, 'submitContactForm'])->name('contact.submit');


Route::get('/counselors', [CounselorController::class, 'index'])->name('counselors.index');
Route::get('/counselors/{id}', [CounselorController::class, 'show'])->name('counselors.show');


// Route for the form submission
Route::post('/submit-question', [QuestionController::class, 'store'])->name('submit-question');