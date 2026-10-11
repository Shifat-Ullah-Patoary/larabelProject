
@extends('layouts.app')

@section('content')

<div class="container-fluid min-vh-100 d-flex align-items-center justify-content-center bg-light py-5">
    <div class="row w-100 justify-content-center">
        <div class="col-12 col-sm-10 col-md-7 col-lg-5 col-xl-4">

            <div class="card border-0 shadow-lg rounded-4">
                <div class="card-body p-4 p-md-5">

                    <!-- Header -->
                    <div class="text-center mb-4">
                        <div class="bg-primary text-white rounded-circle d-inline-flex
                                    align-items-center justify-content-center mb-3"
                             style="width: 65px; height: 65px;">
                            <i class="bi bi-person-lock fs-2"></i>
                        </div>

                        <h2 class="fw-bold mb-2">Welcome Back!</h2>
                        <p class="text-secondary">
                            Please sign in to your account
                        </p>
                    </div>

                    <!-- Validation Errors -->
                    @if ($errors->any())
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ $errors->first() }}

                            <button type="button" class="btn-close"
                                    data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <!-- Login Form -->
                    <form action="{{ url('/login') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="email" class="form-label fw-semibold">
                                Email Address
                            </label>

                            <div class="input-group">
                                <span class="input-group-text bg-white">
                                    <i class="bi bi-envelope text-secondary"></i>
                                </span>

                                <input
                                    type="email"
                                    name="email"
                                    id="email"
                                    class="form-control py-2"
                                    placeholder="Enter your email"
                                    value="{{ old('email') }}"
                                    autocomplete="username"
                                    required
                                >
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label fw-semibold">
                                Password
                            </label>

                            <div class="input-group">
                                <span class="input-group-text bg-white">
                                    <i class="bi bi-lock text-secondary"></i>
                                </span>

                                <input
                                    type="password"
                                    name="password"
                                    id="password"
                                    class="form-control py-2"
                                    placeholder="Enter your password"
                                    autocomplete="current-password"
                                    required
                                >
                            </div>
                        </div>

                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <div class="form-check">
                                <input class="form-check-input"
                                       type="checkbox"
                                       name="remember"
                                       id="remember"
                                       value="1">

                                <label class="form-check-label text-secondary"
                                       for="remember">
                                    Remember me
                                </label>
                            </div>

                            {{-- Add a Forgot Password link here when configured --}}
                        </div>

                        <button type="submit"
                                class="btn btn-primary w-100 py-2 fw-semibold rounded-3">
                            <i class="bi bi-box-arrow-in-right me-2"></i>
                            Login
                        </button>
                    </form>

                    <div class="text-center mt-4">
                        <p class="text-secondary mb-0">
                            Don't have an account?
                            {{-- <a href="{{ route('register') }}"
                                  class="text-primary fw-semibold text-decoration-none">
                                Register
                            </a> --}}
                        </p>
                    </div>

                </div>
            </div>

            <p class="text-center text-secondary small mt-4">
                &copy; {{ date('Y') }} Your Company. All rights reserved.
            </p>

        </div>
    </div>
</div>

@endsection
