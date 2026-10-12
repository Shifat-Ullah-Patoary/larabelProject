@extends('layouts.app')

@section('content')
    <div class="container-fluid min-vh-100 d-flex align-items-center justify-content-center bg-light py-5">
        <div class="row w-100 justify-content-center">
            <div class="col-12 col-sm-10 col-md-7 col-lg-5 col-xl-4">

                <div class="card border-0 shadow-lg rounded-4">
                    <div class="card-body p-4 p-md-5">

                        <div class="text-center mb-4">
                            <div class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3"
                                style="width: 65px; height: 65px;">
                                <i class="bi bi-person-lock fs-2"></i>
                            </div>

                            <h2 class="fw-bold mb-2">Create Account</h2>
                            <p class="text-secondary">
                                Please sign up for a new account
                            </p>
                        </div>

                        @if ($errors->any())
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ $errors->first() }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif

                        <form action="{{ route('register') }}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label for="name" class="form-label fw-semibold">User Name</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-white">
                                        <i class="bi bi-person text-secondary"></i>
                                    </span>
                                    <input type="text" name="name" id="name" class="form-control py-2"
                                        placeholder="Enter your user name" value="{{ old('name') }}" autocomplete="name"
                                        required>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label fw-semibold">Email Address</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-white">
                                        <i class="bi bi-envelope text-secondary"></i>
                                    </span>
                                    <input type="email" name="email" id="email" class="form-control py-2"
                                        placeholder="Enter your email" value="{{ old('email') }}" autocomplete="email"
                                        required>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label fw-semibold">Password</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-white">
                                        <i class="bi bi-lock text-secondary"></i>
                                    </span>
                                    <input type="password" name="password" id="password" class="form-control py-2"
                                        placeholder="Enter your password" autocomplete="new-password" required>
                                </div>
                            </div>

                            <div class="mb-4">
                                <label for="password_confirmation" class="form-label fw-semibold">Confirm Password</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-white">
                                        <i class="bi bi-lock text-secondary"></i>
                                    </span>
                                    <input type="password" name="password_confirmation" id="password_confirmation"
                                        class="form-control py-2" placeholder="Confirm your password"
                                        autocomplete="new-password" required>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary w-100 py-2 fw-semibold rounded-3">
                                <i class="bi bi-person-plus me-2"></i>
                                Register
                            </button>
                        </form>

                           @if (session('success'))
                                <div class="alert alert-success mt-4 mb-0">
                                    {{ session('success') }}
                                </div>
                            @endif

                        {{-- <div class="text-center mt-4">
                            <p class="text-secondary mb-0">
                                Already have an account?
                                <a href="{{ route('login') }}" class="text-primary fw-semibold text-decoration-none">
                                    Login
                                </a>
                            </p>
                        </div> --}}

                    </div>
                </div>

                <p class="text-center text-secondary small mt-4">
                    &copy; {{ date('Y') }} Your Company. All rights reserved.
                </p>

            </div>
        </div>
    </div>
@endsection
