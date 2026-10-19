@extends('layouts.app')

@section('title', 'Our Team | Diamond Group')

@section('content')
    <section class="bg-slate-900 px-6 py-20 text-white sm:py-24">
        <div class="mx-auto max-w-7xl">
            <p class="mb-3 text-sm font-semibold uppercase tracking-[0.2em] text-cyan-300">People behind our work</p>
            <h1 class="text-4xl font-bold tracking-tight sm:text-5xl">Meet our team</h1>
            <p class="mt-5 max-w-2xl text-lg leading-8 text-slate-300">A dedicated team working across travel, transport, and construction supply to support our customers.</p>
        </div>
    </section>
    <section class="px-6 py-16 sm:py-20">
        <div class="mx-auto grid max-w-7xl gap-6 sm:grid-cols-2 lg:grid-cols-4">
            @foreach ([
                ['Guy Hawkins', 'Travel Services'],
                ['Brooklyn Simmons', 'Operations'],
                ['Gertrude M. Rucker', 'Customer Support'],
                ['Mervin Falk', 'Logistics'],
                ['Leandro Mayfield', 'Transport'],
                ['Royce Steadman', 'Construction Supply'],
                ['Josue Eggleston', 'Operations'],
                ['Roscoe Colburn', 'Customer Support'],
            ] as [$name, $role])
                <article class="overflow-hidden rounded-2xl bg-white shadow-sm ring-1 ring-slate-200">
                    <img src="{{ asset('assets/img/team/team-' . $loop->iteration . '.jpg') }}" alt="{{ $name }}" class="h-64 w-full object-cover" loading="lazy">
                    <div class="p-5">
                        <h2 class="text-lg font-bold text-slate-900">{{ $name }}</h2>
                        <p class="mt-1 text-sm text-slate-600">{{ $role }}</p>
                        <a href="{{ route('contracts') }}" class="mt-4 inline-block text-sm font-semibold text-cyan-800 hover:text-cyan-600">Contact our team</a>
                    </div>
                </article>
            @endforeach
        </div>
        <div class="mx-auto mt-12 max-w-7xl rounded-2xl bg-cyan-50 p-8 text-center">
            <h2 class="text-2xl font-bold text-slate-900">How can we help you?</h2>
            <a href="{{ route('contracts') }}" class="mt-5 inline-flex rounded-lg bg-cyan-700 px-5 py-3 font-semibold text-white transition hover:bg-cyan-800">Contact us</a>
        </div>
    </section>
@endsection
