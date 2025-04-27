@extends('layouts.app')

@section('content')
       <!-- Page Header -->
       <div class="container text-center py-5">
        <h1 class="fw-bold display-4" style="color: #3A506B;">Assessment Results</h1>
        <p class="lead">Your score: <strong>{{ $score }}</strong></p>
    </div>

    <!-- Score Representation and Message -->
    <div class="container text-center mb-5">
        

                <!-- Message Based on Score -->
        <p class="fw-semibold">
            @if($score < 2)
                <span class="text-success"><i class="bi bi-check-circle"></i> Your mental health seems to be in a good state. Keep taking care of yourself!</span>
            @elseif($score < 5)
                <span class="text-warning"><i class="bi bi-exclamation-circle"></i> You may be experiencing mild symptoms. Consider self-care strategies.</span>
            @else
                <span class="text-danger"><i class="bi bi-exclamation-triangle"></i> You might be experiencing significant distress. Seeking professional support is recommended.</span>
            @endif
        </p>
    </div>


    


    <!-- Dynamic Suggestions Based on Score -->
    <div class="container mt-4">
        <h5 class="fw-bold mb-4 text-center">Suggestions:</h5>
        <div class="row">
            @if($score < 2)
                <div class="col-md-4 mb-4">
                    <div class="card suggestion-card text-center text-success">
                        <div class="card-body">
                            <i class="bi bi-check-circle suggestion-icon"></i>
                            <p class="card-text">Continue regular exercise for overall well-being.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card suggestion-card text-center text-success">
                        <div class="card-body">
                            <i class="bi bi-check-circle suggestion-icon"></i>
                            <p class="card-text">Maintain a balanced diet and sleep routine.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card suggestion-card text-center text-success">
                        <div class="card-body">
                            <i class="bi bi-check-circle suggestion-icon"></i>
                            <p class="card-text">Stay connected with friends and family for support.</p>
                        </div>
                    </div>
                </div>
            @elseif($score < 5)
                <div class="col-md-4 mb-4">
                    <div class="card suggestion-card text-center text-warning">
                        <div class="card-body">
                            <i class="bi bi-check-circle suggestion-icon"></i>
                            <p class="card-text">Try mindfulness and breathing exercises.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card suggestion-card text-center text-warning">
                        <div class="card-body">
                            <i class="bi bi-check-circle suggestion-icon"></i>
                            <p class="card-text">Consider journaling to track your emotions.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card suggestion-card text-center text-warning">
                        <div class="card-body">
                            <i class="bi bi-check-circle suggestion-icon"></i>
                            <p class="card-text">Take breaks and prioritize relaxation techniques.</p>
                        </div>
                    </div>
                </div>
            @else
                <div class="col-md-4 mb-4">
                    <div class="card suggestion-card text-center text-danger">
                        <div class="card-body">
                            <i class="bi bi-check-circle suggestion-icon"></i>
                            <p class="card-text">It’s highly recommended to talk to a mental health professional.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card suggestion-card text-center text-danger">
                        <div class="card-body">
                            <i class="bi bi-check-circle suggestion-icon"></i>
                            <p class="card-text">Reach out to 24/7 helplines for immediate support.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card suggestion-card text-center text-danger">
                        <div class="card-body">
                            <i class="bi bi-check-circle suggestion-icon"></i>
                            <p class="card-text">Consider scheduling therapy sessions or online consultations.</p>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>

    <!-- Take Again Button -->
<div class="text-center mt-5">
    <a href="{{ route('home') }}" class="btn btn-primary px-5 py-3 shadow-lg custom-btn">Take Again</a>
</div>

<!-- Custom Styles -->
<style>
    .custom-btn {
        background-color: #3A506B;
        color: white;
        font-size: 1.2rem;
        font-weight: 600;
        border-radius: 50px;
        padding: 15px 40px;
        transition: all 0.3s ease;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    }

    .custom-btn:hover {
        background-color: #2A4052;
        transform: scale(1.1);
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.3);
    }

    .custom-btn:active {
        background-color: #1A2B36;
        transform: scale(1.05);
    }
</style>

@endsection

<!-- Custom Styles -->
<style>


/* Suggestions Card Styles */
.suggestion-card {
    border: 2px solid #ddd;
    border-radius: 12px;
    padding: 20px;
    cursor: pointer;
    transition: all 0.3s ease;
}

.suggestion-card:hover {
    transform: translateY(-10px);
    box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.1);
}

.suggestion-icon {
    font-size: 2rem;
    margin-bottom: 10px;
}

/* Suggestions Hover Effects */
.text-success:hover .suggestion-card {
    background-color: #d4edda;
}

.text-warning:hover .suggestion-card {
    background-color: #fff3cd;
}

.text-danger:hover .suggestion-card {
    background-color: #f8d7da;
}

/* Button Styles */
.btn-primary {
    transition: background-color 0.3s ease, transform 0.3s ease;
}

.btn-primary:hover {
    background-color: #2A4052;
    transform: scale(1.05);
}

/* Container padding */
.container {
    padding: 20px;
}
</style>

<!-- Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

<!-- Custom Script -->
<script>
document.addEventListener("DOMContentLoaded", function() {
    // Set the progress circle based on the score
    var score = parseInt(document.querySelector('.progress-circle').getAttribute('data-score'));
    var circle = document.querySelector('.progress-circle circle.progress-circle');
    var dashOffset = 345 - (score / 10) * 345;  // Calculate the stroke dash offset based on score
    circle.style.strokeDashoffset = dashOffset;
});
</script>
