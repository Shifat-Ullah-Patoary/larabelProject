@extends('layouts.app')

@section('title', 'Log in | Diamond Group')

@section('content')
    <section class="flex min-h-[75vh] items-center justify-center px-6 py-16">
        <div class="w-full max-w-md rounded-2xl bg-white p-7 shadow-lg ring-1 ring-slate-200 sm:p-9">
            <div class="mb-8 text-center">
                <div class="mx-auto grid h-14 w-14 place-items-center rounded-2xl bg-cyan-100 text-xl font-bold text-cyan-800">DG</div>
                <h1 class="mt-5 text-3xl font-bold tracking-tight text-slate-900">Welcome back</h1>
                <p class="mt-2 text-slate-600">Sign in to your account</p>
            </div>
            @if (session('login_error'))
                <div role="alert" class="mb-5 rounded-lg border border-red-200 bg-red-50 p-4 text-sm text-red-800">{{ session('login_error') }}</div>
            @endif
            @if ($errors->any())
                <div role="alert" class="mb-5 rounded-lg border border-red-200 bg-red-50 p-4 text-sm text-red-800">{{ $errors->first() }}</div>
            @endif
            <form action="{{ url('/login') }}" method="POST" class="space-y-5">
                @csrf
                <div>
                    <label for="email" class="mb-2 block text-sm font-semibold text-slate-700">Email address</label>
                    <input type="email" name="email" id="email" value="{{ old('email') }}" autocomplete="username" placeholder="you@example.com" required class="w-full rounded-lg border border-slate-300 px-4 py-3 outline-none focus:border-cyan-600 focus:ring-2 focus:ring-cyan-100">
                </div>
                <div>
                    <label for="password" class="mb-2 block text-sm font-semibold text-slate-700">Password</label>
                    <input type="password" name="password" id="password" autocomplete="current-password" placeholder="Enter your password" required class="w-full rounded-lg border border-slate-300 px-4 py-3 outline-none focus:border-cyan-600 focus:ring-2 focus:ring-cyan-100">
                </div>
                <label class="flex items-center gap-2 text-sm text-slate-600">
                    <input type="checkbox" name="remember" id="remember" value="1" class="h-4 w-4 rounded border-slate-300 text-cyan-700 focus:ring-cyan-600">
                    Remember me
                </label>
                <button type="submit" class="w-full rounded-lg bg-cyan-700 px-4 py-3 font-semibold text-white transition hover:bg-cyan-800 focus:outline-none focus:ring-2 focus:ring-cyan-600 focus:ring-offset-2">Log in</button>
            </form>
            <p class="mt-6 text-center text-sm text-slate-600">Don't have an account? <a href="{{ route('register.form') }}" class="font-semibold text-cyan-800 hover:text-cyan-600">Register</a></p>
        </div>
    </section>
@endsection
