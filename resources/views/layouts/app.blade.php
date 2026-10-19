<!DOCTYPE html>
<html lang="en" class="js-loading">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>@yield('title', 'Diamond Group')</title>
    <noscript>
    <style>.hero-bg { opacity: 1 !important; }</style>
</noscript>
<style>
    @media (prefers-reduced-motion: reduce) {
        .hero-bg { opacity: 1 !important; }
    }
</style>
</head>
<body class="min-h-screen bg-slate-50 font-sans text-slate-800 antialiased">
    @include('layouts.header')

    <main>
        @yield('content')
    </main>

    @include('layouts.footer')

      {{-- GSAP + ScrollTrigger + SplitType --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js" defer></script>
    <script src="https://unpkg.com/split-type@0.3.4/umd/index.min.js" defer></script>

    @stack('scripts')
</body>
</html>
