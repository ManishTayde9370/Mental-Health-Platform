<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mental Health Platform</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Animate.css for animations -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
    
    <!-- Custom CSS for the website -->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">

    <style>
        /* Custom CSS */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
        }
        
        .navbar {
            background-color: #2d3e50;
        }

        .navbar a {
            color: #ffffff !important;
        }

        .navbar a:hover {
            color: #ff6347 !important;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        .card {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card-body {
            background-color: #ffffff;
            border-radius: 15px;
        }

        .testimonial-card {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.1);
        }

        .testimonial-card img {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 50%;
        }

        .testimonial-card p {
            font-style: italic;
        }

        .hero-video iframe {
            max-width: 100%;
            height: 500px;
            border-radius: 15px;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('images/favicon.ico') }}" alt="Mental Health Platform" style="width: 50px;">
                Mental Health Platform
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('assessment') }}">Take Assessment</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('recommendations') }}">Recommendations</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content Section -->
    @yield('content')
    @stack('styles')

    <!-- Footer -->
    <footer class="bg-dark text-white py-4">
        <div class="container text-center">
            <p>&copy; 2025 Mental Health Platform. All rights reserved.</p>
            
        </div>
    </footer>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>

</html>
