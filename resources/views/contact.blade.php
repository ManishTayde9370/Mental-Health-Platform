@extends('layouts.app')

@push('styles')
<!-- FontAwesome Icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
@endpush

@section('content')
    <!-- Contact Hero Section -->
    <section id="contact-hero" class="d-flex align-items-center" style="background-image: url('{{ asset('images/contact1.png') }}'); height: 60vh; background-size: cover; background-position: center;">
        
    </section>

    <!-- Contact Form Section -->
    <section id="contact-form" class="py-5">
    <div class="container text-center text-black">
            <h1 class="display-3 fw-bold animated fadeInUp">Get in Touch</h1>
            <p class="lead animated fadeInUp" style="animation-delay: 0.2s;">We'd love to hear from you! Reach out for any inquiries or support.</p>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card shadow-lg border-0 rounded-3">
                        <div class="card-body p-4">
                            @if(session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif

                            <h2 class="text-center mb-4">Send Us a Message</h2>

                            <form action="{{ route('contact.submit') }}" method="POST">
                                @csrf
                                <!-- Name Field -->
                                <div class="mb-3">
                                    <label for="name" class="form-label">Your Name</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required>
                                    @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <!-- Email Field -->
                                <div class="mb-3">
                                    <label for="email" class="form-label">Your Email</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required>
                                    @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <!-- Message Field -->
                                <div class="mb-3">
                                    <label for="message" class="form-label">Your Message</label>
                                    <textarea class="form-control @error('message') is-invalid @enderror" id="message" name="message" rows="4" required>{{ old('message') }}</textarea>
                                    @error('message')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary btn-lg rounded-pill">Send Message</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Social Media Section -->
    <section id="social-media" class="py-5 text-center">
        <div class="container">
            <h2 class="display-4 mb-4">Stay Connected</h2>
            <p class="lead mb-4">Follow us on social media for more updates and mental health tips.</p>
            <div class="d-flex justify-content-center gap-3">
                <a href="#" class="social-btn facebook">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#" class="social-btn twitter">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="#" class="social-btn instagram">
                    <i class="fab fa-instagram"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Custom Styles -->
    <style>
        .social-btn {
            width: 60px;
            height: 60px;
            background: transparent;
            border: 2px solid #6c757d;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            color: #6c757d;
            transition: 0.4s all;
            text-decoration: none;
        }

        .social-btn:hover {
            color: white;
            background: #6c757d;
            box-shadow: 0 0 15px rgba(108, 117, 125, 0.8);
            transform: scale(1.1);
        }

        /* Specific platform colors */
        .facebook:hover {
            background: #3b5998;
            box-shadow: 0 0 15px #3b5998;
        }

        .twitter:hover {
            background: #00acee;
            box-shadow: 0 0 15px #00acee;
        }

        .instagram:hover {
            background: #e4405f;
            box-shadow: 0 0 15px #e4405f;
        }
    </style>

@endsection
