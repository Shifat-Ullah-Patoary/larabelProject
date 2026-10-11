@extends('layouts.app')
@section('content')


{{-- <!DOCTYPE html> --}}
{{-- <html lang="en"> --}}

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diamond Group | Leading Excellence in Tours, Transport & Construction</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .hero-section {
            background: linear-gradient(rgba(15, 23, 42, 0.8), rgba(15, 23, 42, 0.8)),
                url('https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=1500&q=80') center/cover no-repeat;
            color: white;
            padding: 120px 0;
        }

        .service-card {
            border: none;
            border-radius: 12px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .service-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.15) !important;
        }

        .icon-box {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.8rem;
            margin: 0 auto 20px;
        }
    </style>
</head>

<body class="bg-light">

    {{-- <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold text-uppercase tracking-wide" href="#">
                <i class="fa-solid fa-gem text-info me-2"></i>Diamond Group
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#divisions">Our Divisions</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav> --}}

    <!-- Hero Section -->
    <header id="home" class="hero-section text-center">
        <div class="container">
            <h1 class="display-4 fw-bold mb-3">Welcome to Diamond Group</h1>
            <p class="lead max-w-2xl mx-auto mb-4">
                Delivering excellence across travel experiences, logistics solutions, and heavy construction materials.
            </p>
            <a href="#divisions" class="btn btn-info btn-lg px-4 text-white fw-semibold">Explore Our Services</a>
        </div>
    </header>

    <!-- Divisions / Business Units Section -->
    <section id="divisions" class="py-5">
        <div class="container py-4">
            <div class="text-center mb-5">
                <h2 class="fw-bold text-uppercase">Our Business Divisions</h2>
                <div class="bg-info mx-auto rounded" style="width: 60px; height: 4px;"></div>
                <p class="text-muted mt-2">Discover the key services that power our enterprise.</p>
            </div>

            <div class="row g-4">
                <!-- 1. Diamond Travel and Tours -->
                <div class="col-lg-4 col-md-6">
                    <div class="card service-card h-100 shadow-sm p-4 text-center">
                        <div class="card-body">
                            <!-- Service Image -->
                            <div class="service-image mb-3">
                                <img src="{{ asset('assets/images/travel.jpg') }}" alt="Diamond Travel & Tours"
                                    class="img-fluid">
                            </div>
                            <h4 class="card-title fw-bold mb-3">Diamond Travel & Tours</h4>
                            <p class="card-text text-secondary">
                                Exceptional travel packages, flight reservations, tour management, and personalized
                                holiday itineraries around the world.
                            </p>
                        </div>
                        <div class="card-footer bg-transparent border-0 pt-0">
                            <a href="#" class="btn btn-outline-primary btn-sm rounded-pill px-4">Learn More</a>
                        </div>
                    </div>
                </div>

                <!-- 2. Diamond Transport -->
                <div class="col-lg-4 col-md-6">
                    <div class="card service-card h-100 shadow-sm p-4 text-center">
                        <div class="card-body">
                            <div class="service-image mb-3">
                                <img src="{{ asset('assets/images/transport.jpg') }}" alt="Diamond Transport"
                                    class="img-fluid">
                            </div>
                            <h4 class="card-title fw-bold mb-3">Diamond Transport</h4>
                            <p class="card-text text-secondary">
                                Reliable freight logistics, fleet rental services, and nation-wide commercial
                                transportation solutions built on safety and speed.
                            </p>
                        </div>
                        <div class="card-footer bg-transparent border-0 pt-0">
                            <a href="#" class="btn btn-outline-success btn-sm rounded-pill px-4">Learn More</a>
                        </div>
                    </div>
                </div>

                <!-- 3. Send Cement Concrete -->
                <div class="col-lg-4 col-md-6 mx-auto">
                    <div class="card service-card h-100 shadow-sm p-4 text-center">
                        <div class="card-body">
                             <div class="service-image mb-3">
                                <img src="{{ asset('assets/images/brick.jpg') }}" alt="Diamond Transport"
                                    class="img-fluid">
                            </div>
                            <h4 class="card-title fw-bold mb-3">Brick, Send, Concrete</h4>
                            <p class="card-text text-secondary">
                                High-grade ready-mix concrete, sand, cement supply, and heavy material delivery tailored
                                for durable infrastructure construction.
                            </p>
                        </div>
                        <div class="card-footer bg-transparent border-0 pt-0">
                            <a href="#" class="btn btn-outline-warning btn-sm rounded-pill px-4">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    {{-- <footer id="contact" class="bg-dark text-white py-4 mt-5">
        <div class="container text-center">
            <p class="mb-1">&copy; {{ date('Y') }} <strong>Diamond Group</strong>. All rights reserved.</p>
            <small class="text-secondary">Providing quality solutions in Travel, Transport, and Construction.</small>
        </div>
    </footer> --}}

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>



{{-- </html> --}}
@endsection
