@extends('layouts.app')

@section('content')
<style>
    /* Floating Animation for GIF */
    .floating {
        animation: float 3s ease-in-out infinite;
    }
    @keyframes float {
        0% { transform: translateY(0px); }
        50% { transform: translateY(-10px); }
        100% { transform: translateY(0px); }
    }

    /* Fade-in Animation for Form */
    .fade-in {
        opacity: 0;
        transform: translateY(20px);
        animation: fadeIn ease-out 1s forwards;
    }
    @keyframes fadeIn {
        0% { opacity: 0; transform: translateY(20px); }
        100% { opacity: 1; transform: translateY(0px); }
    }

    /* Button Hover Effect */
    .btn-animate:hover {
        transform: scale(1.05);
        transition: all 0.3s ease-in-out;
    }

    /* Form Styling */
    .assessment-form {
        background: #F7F9FC;
        border-left: 5px solid #6A0572;
        padding: 30px;
        border-radius: 10px;
    }

    .form-label {
        color: #6A0572;
    }

    /* Header Styling */
    .assessment-header {
        color: #3A506B;
        font-weight: 700;
    }

    .assessment-subheader {
        color: #6A0572;
    }
</style>

<div class="container py-5">
    <h1 class="text-center assessment-header">Mental Health Assessment</h1>
    <p class="text-center text-muted assessment-subheader">Answer the questions honestly to assess your mental well-being.</p>

    <div class="row justify-content-center align-items-center">
        <!-- Left Side: Animated GIF -->
        <div class="col-md-4 text-center">
            <img src="{{ asset('images/icegif-302.gif') }}" alt="Mental Health GIF" class="img-fluid floating shadow-sm" style="max-width: 100%;">
        </div>

        <!-- Right Side: Form -->
        <div class="col-md-6">
            <form action="{{ route('process.assessment') }}" method="POST" class="assessment-form fade-in">
                @csrf
                
                <!-- Question 1 -->
                <div class="mb-3">
                    <label class="form-label fw-semibold">How often do you feel anxious?</label>
                    <select name="responses[]" class="form-select rounded-3">
                        <option value="0">Never</option>
                        <option value="1">Sometimes</option>
                        <option value="2">Often</option>
                        <option value="3">Always</option>
                    </select>
                </div>

                <!-- Question 2 -->
                <div class="mb-3">
                    <label class="form-label fw-semibold">How often do you feel sad or depressed?</label>
                    <select name="responses[]" class="form-select rounded-3">
                        <option value="0">Never</option>
                        <option value="1">Sometimes</option>
                        <option value="2">Often</option>
                        <option value="3">Always</option>
                    </select>
                </div>

                <!-- Question 3 -->
                <div class="mb-3">
                    <label class="form-label fw-semibold">Do you have trouble sleeping?</label>
                    <select name="responses[]" class="form-select rounded-3">
                        <option value="0">Never</option>
                        <option value="1">Sometimes</option>
                        <option value="2">Often</option>
                        <option value="3">Always</option>
                    </select>
                </div>

                <!-- Question 4 -->
                <div class="mb-3">
                    <label class="form-label fw-semibold">Do you feel overwhelmed with daily tasks?</label>
                    <select name="responses[]" class="form-select rounded-3">
                        <option value="0">Never</option>
                        <option value="1">Sometimes</option>
                        <option value="2">Often</option>
                        <option value="3">Always</option>
                    </select>
                </div>

                <!-- Question 5 -->
                <div class="mb-3">
                    <label class="form-label fw-semibold">How often do you feel socially withdrawn?</label>
                    <select name="responses[]" class="form-select rounded-3">
                        <option value="0">Never</option>
                        <option value="1">Sometimes</option>
                        <option value="2">Often</option>
                        <option value="3">Always</option>
                    </select>
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn rounded-pill shadow-sm btn-animate" style="background-color: #6A0572; color: white;">
                        Submit <i class="fas fa-arrow-right ms-1"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Need Help Section -->
    <div class="text-center mt-4">
        <h5 style="color: #3A506B;">Need Help?</h5>
        <p class="text-muted">
            If you're struggling, consider seeking professional support. Visit our 
            <a href="{{ route('recommendations') }}" class="text-decoration-none fw-bold" style="color: #6A0572;">Recommendation Page</a> for guidance.
        </p>
    </div>
</div>
@endsection
