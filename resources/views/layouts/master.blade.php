<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title', 'Les Artisans - Portfolio')</title>
    <link rel="stylesheet" href="{{ url('https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css')}}">

    <!-- Custom CSS link -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>

    <!-- Navbar Section -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.html">Les Artisans</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ url('/about') }}">About Me</a></li>
                <li><a href="{{ url('/projects') }}">Projects</a></li>
                <li><a href="{{ url('/contact') }}">Contact</a></li>
            </ul>
            <!-- <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="new.html">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="about_me.html">About Me</a></li>
                <li class="nav-item"><a class="nav-link" href="projects.html">Projects</a></li>
                <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
            </ul> -->
        </div>
        </div>
    </nav>
    <!-- Navbar Section End -->


    <!-- Content Area -->
    <div>
        @yield('content')
    </div>
    <!-- Content Area End -->






    <!-- Footer Section -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <h4>Social Media</h4>
                    <ul class="list-unstyled">
                        <li><a href="{{ url('https://github.com/anis88')}}" target="_blank">GitHub <i class="fab fa-github"></i></a></li>
                        <li><a href="{{ url('https://www.linkedin.com/in/muhammadanisuzzaman')}}" target="_blank">LinkedIn <i class="fab fa-linkedin"></i></a></li>
                        <li><a href="{{ url('https://twitter.com/tanchan46')}}" target="_blank">Twitter <i class="fab fa-twitter"></i></a></li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <h4>Contact</h4>
                    <ul class="list-unstyled">
                        <li><strong>Address:</strong> 123 Main Street, City, Country</li>
                        <li><strong>Phone:</strong> +1 (123) 456-7890</li>
                        <li><strong>Email:</strong> your.email@example.com</li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <h4>Navigation</h4>
                    <ul class="list-unstyled">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ url('/about') }}">About Me</a></li>
                        <li><a href="{{ url('/projects') }}">Projects</a></li>
                        <li><a href="{{ url('/contact') }}">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>&copy; {{ date('Y') }} Tanchan</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->


    <script src="{{ url('https://code.jquery.com/jquery-3.5.1.slim.min.js')}}"></script>
    <script src="{{ url('https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js')}}"></script>
    <script src="{{ url('https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js')}}"></script>
</body>
</html>
