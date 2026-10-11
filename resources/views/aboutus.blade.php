@extends('layouts.app')
@section('content')
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row align-items-center g-5">

                <div class="col-lg-6">
                    <span class="text-primary fw-bold text-uppercase">
                        About Our Company
                    </span>

                    <h1 class="display-5 fw-bold mt-3">
                        Your Trusted Partner for Quality Services
                    </h1>

                    <p class="text-secondary mt-4">
                        Welcome to Diamond. We are committed to providing
                        reliable, professional, and customer-focused services
                        that help individuals and businesses achieve their goals.
                    </p>

                    <p class="text-secondary">
                        Our focus is on building lasting relationships through
                        quality, integrity, innovation, and attention to detail.
                        We continuously strive to improve our services and
                        deliver a positive experience to every customer.
                    </p>

                    <a href="{{ url('/#contact') }}" class="btn btn-primary mt-3">
                        Contact Us
                    </a>
                </div>

                <div class="col-lg-6">
                    <div class="bg-white rounded-4 shadow-sm p-5">
                        <h3 class="fw-bold mb-4">Who We Are</h3>

                        <p class="text-secondary">
                            We are a customer-focused company dedicated to
                            delivering dependable solutions across our business
                            divisions.
                        </p>

                        <div class="row g-3 mt-3">
                            <div class="col-sm-6">
                                <h5 class="fw-bold">Our Mission</h5>
                                <p class="text-secondary">
                                    To provide quality services that create
                                    value and customer satisfaction.
                                </p>
                            </div>

                            <div class="col-sm-6">
                                <h5 class="fw-bold">Our Vision</h5>
                                <p class="text-secondary">
                                    To build a trusted brand recognized for
                                    excellence, integrity, and innovation.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
