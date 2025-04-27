@extends('layouts.app')

@section('content')

<!-- Page Title -->
<div class="container text-center my-5">
    <h1 class="fw-bold" style="color: #3A506B;">Mental Health Support & Resources</h1>
    <p class="lead">Find the right help and guidance tailored to your needs.</p>
</div>

<!-- Filter Buttons -->
<div class="container mb-4 text-center">
    <button class="btn btn-outline-primary m-2 filter-btn active" onclick="filterCards('all')">All</button>
    <button class="btn btn-outline-success m-2 filter-btn" onclick="filterCards('self-care')">Self-Care</button>
    <button class="btn btn-outline-warning m-2 filter-btn" onclick="filterCards('professional-help')">Professional Help</button>
    <button class="btn btn-outline-info m-2 filter-btn" onclick="filterCards('emergency')">Emergency Support</button>
</div>

<!-- Spinner -->
<div id="loading-spinner" class="text-center my-4" style="display: none;">
    <div class="spinner-border text-primary" role="status">
        <span class="visually-hidden">Loading...</span>
    </div>
</div>

<!-- Recommendations Section -->
<div class="container" id="recommendations">
    <div class="row g-4">

        <!-- Card 1 -->
        <div class="col-md-6" data-category="self-care" onclick="showDetails('mindfulness')">
            <div class="card shadow-sm h-100">
                <div class="card-body">
                    <h5 class="card-title text-primary">Mindfulness Practices</h5>
                    <p class="card-text">Learn simple meditation and breathing exercises to reduce stress.</p>
                    <a href="#" class="btn btn-primary">Explore</a>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="col-md-6" data-category="professional-help" onclick="showDetails('find-therapist')">
            <div class="card shadow-sm h-100">
                <div class="card-body">
                    <h5 class="card-title text-success">Find a Therapist</h5>
                    <p class="card-text">Connect with licensed therapists near you for personalized support.</p>
                    <a href="#" class="btn btn-success">Find Help</a>
                </div>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="col-md-6" data-category="emergency" onclick="showDetails('helplines')">
            <div class="card shadow-sm h-100">
                <div class="card-body">
                    <h5 class="card-title text-danger">24/7 Helplines</h5>
                    <p class="card-text">Immediate assistance for anyone facing a mental health crisis.</p>
                    <a href="#" class="btn btn-danger">Get Support</a>
                </div>
            </div>
        </div>

        <!-- Card 4 -->
        <div class="col-md-6" data-category="self-care" onclick="showDetails('self-care-activities')">
            <div class="card shadow-sm h-100">
                <div class="card-body">
                    <h5 class="card-title text-primary">Self-Care Activities</h5>
                    <p class="card-text">Daily tips and routines for improving your mental well-being.</p>
                    <a href="#" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- No Results Message -->
<div id="no-results" class="text-center mt-4" style="display: none;">
    <h4 class="text-muted">No recommendations found for this category.</h4>
</div>

<!-- Modal for Detailed Information -->
<div class="modal fade" id="recommendationModal" tabindex="-1" aria-labelledby="recommendationModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="recommendationModalLabel">Recommendation Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h5 id="modal-title"></h5>
                <p id="modal-description"></p>
                <a href="#" id="modal-link" class="btn btn-primary" target="_blank">Explore</a>
            </div>
        </div>
    </div>
</div>

<!-- Custom Script -->
<script>
function filterCards(category) {
    const cards = document.querySelectorAll('#recommendations .col-md-6');
    const spinner = document.getElementById('loading-spinner');
    const noResults = document.getElementById('no-results');
    const filterButtons = document.querySelectorAll('.filter-btn');

    // Update active button
    filterButtons.forEach(btn => btn.classList.remove('active'));
    event.target.classList.add('active');

    // Show spinner
    spinner.style.display = 'block';
    noResults.style.display = 'none';
    document.getElementById('recommendations').classList.add('blur-sm');

    setTimeout(() => {
        let visibleCount = 0;

        cards.forEach(card => {
            const cardCategory = card.getAttribute('data-category');
            card.style.opacity = 0; // Start fade out

            setTimeout(() => {
                if (category === 'all' || cardCategory === category) {
                    card.style.display = 'block';
                    setTimeout(() => { card.style.opacity = 1; }, 50); // Fade in
                    visibleCount++;
                } else {
                    card.style.display = 'none';
                }
            }, 300);
        });

        // Hide spinner
        spinner.style.display = 'none';
        document.getElementById('recommendations').classList.remove('blur-sm');

        // Show "No results" if none
        noResults.style.display = (visibleCount === 0) ? 'block' : 'none';

    }, 600);
}

function showDetails(recommendationType) {
    const modalTitle = document.getElementById('modal-title');
    const modalDescription = document.getElementById('modal-description');
    const modalLink = document.getElementById('modal-link');

    switch (recommendationType) {
        case 'mindfulness':
            modalTitle.innerText = 'Mindfulness Practices';
            modalDescription.innerText = 'Mindfulness practices include meditation and breathing exercises that help reduce stress and promote mental well-being.';
            modalLink.href = '#';
            modalLink.innerText = 'Learn More';
            break;
        case 'find-therapist':
            modalTitle.innerText = 'Find a Therapist';
            modalDescription.innerText = 'You can connect with licensed therapists in your area to receive personalized mental health support.';
            modalLink.href = '#';
            modalLink.innerText = 'Find a Therapist';
            break;
        case 'helplines':
            modalTitle.innerText = '24/7 Helplines';
            modalDescription.innerText = 'If you are in immediate need, these 24/7 helplines provide mental health crisis support around the clock.';
            modalLink.href = '#';
            modalLink.innerText = 'Call a Helpline';
            break;
        case 'self-care-activities':
            modalTitle.innerText = 'Self-Care Activities';
            modalDescription.innerText = 'Discover daily self-care activities such as journaling, exercise, and meditation to improve your mental health.';
            modalLink.href = '#';
            modalLink.innerText = 'Explore Self-Care';
            break;
        default:
            modalTitle.innerText = 'Unknown Recommendation';
            modalDescription.innerText = 'No information available.';
            modalLink.href = '#';
            modalLink.innerText = 'Learn More';
            break;
    }

    // Show the modal
    new bootstrap.Modal(document.getElementById('recommendationModal')).show();
}
</script>

<!-- Custom Styles -->
<style>
#recommendations .col-md-6 {
    transition: opacity 0.4s ease, transform 0.4s ease;
}

/* Button active state */
.filter-btn.active {
    background-color: #3A506B;
    color: white;
    border-color: #3A506B;
}

/* Optional: slight blur when loading */
.blur-sm {
    filter: blur(2px);
}

/* Spinner centered nicely */
#loading-spinner {
    height: 60px;
}
</style>

@endsection
