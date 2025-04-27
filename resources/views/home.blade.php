@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section id="hero" class="d-flex align-items-center" style="background-image: url('{{ asset('images/hero-bg.jpg') }}'); height: 100vh; background-size: cover; background-position: center;">
        <div class="container text-center text-white">
            <h1 class="display-4 fw-bold animated fadeInUp">Your Mental Health Journey Starts Here</h1>
            <p class="lead animated fadeInUp" style="animation-delay: 0.2s;">Start your mental health assessment today and take the first step toward better well-being.</p>
            <a href="{{ route('assessment') }}" class="btn btn-primary btn-lg rounded-pill mt-4 animated fadeInUp" style="animation-delay: 0.4s;">Start Assessment</a>
        </div>
    </section>

    <!-- Information Section -->
    <section id="info" class="py-5">
        <div class="container text-center">
            <h2 class="display-4 mb-4">Why Mental Health Matters</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="icon-box mb-4">
                        <img src="{{ asset('images/mental-health-icon.png') }}" alt="Mental Health Icon" class="img-fluid mb-3" style="width: 80px; height: 80px;">
                        <h4>Recognizing the Signs</h4>
                        <p>Understand the signs of mental health struggles and take proactive steps for better well-being.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="icon-box mb-4">
                        <img src="{{ asset('images/support-icon.png') }}" alt="Support Icon" class="img-fluid mb-3" style="width: 80px; height: 80px;">
                        <h4>Get Professional Help</h4>
                        <p>Explore therapy options and support groups that are available to help you heal and grow.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="icon-box mb-4">
                        <img src="{{ asset('images/self-care-icon.png') }}" alt="Self-care Icon" class="img-fluid mb-3" style="width: 80px; height: 80px;">
                        <h4>Self-Care Tips</h4>
                        <p>Learn self-care techniques and mindfulness practices that can reduce stress and improve mental health.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Ask a Question Section -->
<section id="ask-question" class="py-5 bg-light">
    <div class="container text-center">
        <h2 class="display-4 mb-4">Have a Question?</h2>
        <p class="lead mb-5">Our team is here to help. Ask us anything related to mental health, and we'll get back to you with answers.</p>

        <!-- Display Success Message -->
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Question Form -->
        <form action="{{ route('submit-question') }}" method="POST">
            @csrf
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="form-group">
                        <textarea class="form-control" name="question" rows="4" placeholder="Type your question here..." required></textarea>
                    </div>
                </div>
                <div class="col-md-3">
                    <button type="submit" class="btn btn-primary btn-lg w-100">Submit Question</button>
                </div>
            </div>
        </form>
    </div>
</section>


    <!-- Testimonials Section -->
    <section id="testimonials" class="bg-light py-5">
        <div class="container text-center">
            <h2 class="display-4 mb-4">What Our Users Say</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="testimonial-card p-4">
                        <img src="{{ asset('images/bachhi.jpg') }}" alt="User" class="rounded-circle mb-3" style="width: 100px; height: 100px;">
                        <p>"This platform helped me understand my mental health better. The resources were invaluable!"</p>
                        <h5>Nachiket Patil</h5>
                        <p>Recent user</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-card p-4">
                        <img src="{{ asset('images/satija.jpg') }}" alt="User" class="rounded-circle mb-3" style="width: 100px; height: 100px;">
                        <p>"The assessment helped me pinpoint my mental health struggles, and the recommendations were great!"</p>
                        <h5>Yash Satija</h5>
                        <p>Recent user</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-card p-4">
                        <img src="{{ asset('images/tanmay.jpg') }}" alt="User" class="rounded-circle mb-3" style="width: 100px; height: 100px;">
                        <p>"I appreciate the clear advice and resources this site provided. It’s been life-changing."</p>
                        <h5>Tanmay Jagtap</h5>
                        <p>Recent user</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Video Section -->
    <section id="video" class="py-5 text-center">
        <div class="container">
            <h2 class="display-4 mb-4">Understanding Mental Health</h2>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/MaFv-SMgHb0?si=QHCYcVzX67wucpju" allowfullscreen></iframe>
            </div>
            <p class="mt-3 text-muted">Watch this video to understand more about mental health and how you can take action today.</p>
        </div>
    </section>
@endsection

<!-- Custom Styles -->
<style>
    #ask-question {
        background-color: #f8f9fa;
    }

    #ask-question h2 {
        font-size: 2.5rem;
        font-weight: 700;
        color: #3A506B;
    }

    #ask-question .form-control {
        border-radius: 10px;
        padding: 15px;
        font-size: 1rem;
        border: 1px solid #ddd;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    #ask-question .btn-primary {
        border-radius: 10px;
        padding: 12px 30px;
        font-size: 1.2rem;
        background-color: #3A506B;
        border: none;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    }

    #ask-question .btn-primary:hover {
        background-color: #2A4052;
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.3);
    }
</style>
