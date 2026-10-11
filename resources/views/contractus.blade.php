@extends('layouts.app')
@section('content')
    {{-- <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | Diamond</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">
</head> --}}

    <body class="bg-light">

        <section class="py-5">
            <div class="container">
                <div class="text-center mb-5">
                    <h1 class="fw-bold">Contact Us</h1>
                    <p class="text-secondary">
                        Have a question or need our services? We'd love to hear from you.
                    </p>
                </div>

                <div class="row g-4">
                    <!-- Contact Information -->
                    <div class="col-lg-4">
                        <div class="bg-primary text-white p-4 rounded-4 h-100">
                            <h3 class="fw-bold mb-4">Get in Touch</h3>

                            <p>Contact our team for information about our services.</p>

                            <hr>

                            <h6 class="fw-bold">Address</h6>
                            <p>Enter your company address here</p>

                            <h6 class="fw-bold">Phone</h6>
                            <p>+880 1XXXXXXXXX</p>

                            <h6 class="fw-bold">Email</h6>
                            <p>info@example.com</p>

                            <h6 class="fw-bold">Business Hours</h6>
                            <p class="mb-0">Saturday – Thursday: 9:00 AM – 6:00 PM</p>
                        </div>
                    </div>

                    <!-- Contact Form -->
                    <div class="col-lg-8">
                        <div class="bg-white p-4 p-md-5 rounded-4 shadow-sm">
                            <h3 class="fw-bold mb-4">Send Us a Message</h3>

                            <form action="{{ route('contract.store') }}" method="POST">
                                @csrf

                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="name" class="form-label">Full Name</label>
                                        <input type="text" name="name" id="name" class="form-control"
                                            value="{{ old('name') }}" required>
                                        @error('name')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="col-md-6">
                                        <label for="email" class="form-label">Email Address</label>
                                        <input type="email" name="email" id="email" class="form-control"
                                            value="{{ old('email') }}" required>
                                        @error('email')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="col-12">
                                        <label for="subject" class="form-label">Subject</label>
                                        <input type="text" name="subject" id="subject" class="form-control"
                                            value="{{ old('subject') }}" required>
                                        @error('subject')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="col-12">
                                        <label for="message" class="form-label">Message</label>
                                        <textarea name="message" id="message" class="form-control" rows="5" required>{{ old('message') }}</textarea>
                                        @error('message')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary px-4">
                                            Send Message
                                        </button>
                                    </div>
                                </div>
                            </form>

                            @if (session('success'))
                                <div class="alert alert-success mt-4 mb-0">
                                    {{ session('success') }}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </body>
@endsection
