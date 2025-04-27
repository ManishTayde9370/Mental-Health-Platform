<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecommendationController extends Controller
{
    // Method to display recommendations based on the assessment score
    public function index(Request $request)
    {
        // Retrieve the assessment score from the request
        $assessmentScore = $request->input('assessmentScore');

        // Determine recommendations based on the score
        $recommendations = $this->getRecommendations($assessmentScore);

        // Pass recommendations to the view
        return view('recommendations', compact('recommendations'));
    }

    // Method to get recommendations based on the assessment score
    private function getRecommendations($assessmentScore)
    {
        if ($assessmentScore < 3) {
            // Mild symptoms
            return [
                'Self-Care Practices' => 'Mindfulness, Meditation, Exercise',
                'Therapy/Support' => 'Consider talking to a therapist for stress management.',
                'Resources' => 'Read articles about overcoming mild anxiety.',
            ];
        } elseif ($assessmentScore >= 3 && $assessmentScore <= 6) {
            // Moderate symptoms
            return [
                'Self-Care Practices' => 'Journaling, Breathing exercises, Gratitude practice',
                'Therapy/Support' => 'Join an online support group.',
                'Resources' => 'Explore Cognitive Behavioral Therapy (CBT) resources.',
            ];
        } else {
            // Severe symptoms
            return [
                'Self-Care Practices' => 'Practice guided mindfulness exercises.',
                'Therapy/Support' => 'Contact a therapist or counselor immediately.',
                'Resources' => 'Call a mental health crisis hotline for immediate support.',
            ];
        }
    }
}
