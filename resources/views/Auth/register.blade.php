@extends('layouts.app')

@section('title', 'Register | Diamond Group')

@section('content')
    <section class="flex min-h-[75vh] items-center justify-center px-6 py-16">
        <div class="w-full max-w-md rounded-2xl bg-white p-7 shadow-lg ring-1 ring-slate-200 sm:p-9">
            <div class="mb-8 text-center">
                <div class="mx-auto grid h-14 w-14 place-items-center rounded-2xl bg-cyan-100 text-xl font-bold text-cyan-800">DG</div>
                <h1 class="mt-5 text-3xl font-bold tracking-tight text-slate-900">Create account</h1>
                <p class="mt-2 text-slate-600">Register for a new account</p>
            </div>
            @if ($errors->any())
                <div role="alert" class="mb-5 rounded-lg border border-red-200 bg-red-50 p-4 text-sm text-red-800">{{ $errors->first() }}</div>
            @endif
            <form action="{{ route('register.store') }}" method="POST" class="space-y-5">
                @csrf
                <div>
                    <label for="name" class="mb-2 block text-sm font-semibold text-slate-700">User name</label>
                    <input type="text" name="name" id="name" value="{{ old('name') }}" autocomplete="name" placeholder="Enter your name" required class="w-full rounded-lg border border-slate-300 px-4 py-3 outline-none focus:border-cyan-600 focus:ring-2 focus:ring-cyan-100">
                </div>
                <div>
                    <label for="email" class="mb-2 block text-sm font-semibold text-slate-700">Email address</label>
                    <input type="email" name="email" id="email" value="{{ old('email') }}" autocomplete="email" placeholder="you@example.com" required class="w-full rounded-lg border border-slate-300 px-4 py-3 outline-none focus:border-cyan-600 focus:ring-2 focus:ring-cyan-100">
                </div>
                <div>
                    <label for="password" class="mb-2 block text-sm font-semibold text-slate-700">Password</label>
                    <input type="password" name="password" id="password" autocomplete="new-password" required class="w-full rounded-lg border border-slate-300 px-4 py-3 outline-none focus:border-cyan-600 focus:ring-2 focus:ring-cyan-100">
                </div>
                <div>
                    <label for="password_confirmation" class="mb-2 block text-sm font-semibold text-slate-700">Confirm password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" autocomplete="new-password" required class="w-full rounded-lg border border-slate-300 px-4 py-3 outline-none focus:border-cyan-600 focus:ring-2 focus:ring-cyan-100">
                </div>
                <button type="submit" class="w-full rounded-lg bg-cyan-700 px-4 py-3 font-semibold text-white transition hover:bg-cyan-800 focus:outline-none focus:ring-2 focus:ring-cyan-600 focus:ring-offset-2">Register</button>
            </form>
            @if (session('success'))
                <div role="status" class="mt-5 rounded-lg border border-emerald-200 bg-emerald-50 p-4 text-emerald-800">{{ session('success') }}</div>
            @endif
            <p class="mt-6 text-center text-sm text-slate-600">Already registered? <a href="{{ route('login') }}" class="font-semibold text-cyan-800 hover:text-cyan-600">Log in</a></p>
        </div>
    </section>
@endsection
