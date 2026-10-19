@extends('layouts.admin')

@section('title', 'Contract Page Settings | Diamond Group')

@section('content')
    <div class="mx-auto max-w-4xl">

        <div class="mb-8">
            <h1 class="text-2xl font-bold text-slate-900">
                Contract Page Settings
            </h1>
            <p class="mt-2 text-sm text-slate-500">
                Edit the text and contact details for the Contracts page.
            </p>
        </div>

        @if (session('success'))
            <div class="mb-6 rounded-lg border border-green-200 bg-green-50 px-4 py-3 text-sm text-green-800">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="mb-6 rounded-lg border border-red-200 bg-red-50 px-4 py-3 text-sm text-red-800">
                <p class="mb-2 font-semibold">
                    Please correct the following errors:
                </p>
                <ul class="list-inside list-disc">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.contract-settings.update') }}" method="POST" enctype="multipart/form-data"
            class="space-y-8 rounded-2xl border border-slate-200 bg-white p-6 shadow-sm sm:p-8">

            @csrf
            @method('PUT')

            {{-- =====================================================
                 1. HERO SECTION
            ===================================================== --}}
            <div class="border-b border-slate-200 pb-6">
                <h2 class="text-lg font-bold text-slate-800">1. Hero Section</h2>
                <p class="text-xs text-slate-500">Manage the heading, contact details, and business hours.</p>

                <div class="mt-4 space-y-4">
                    <div>
                        <label for="top_header" class="mb-2 block text-sm font-semibold text-slate-700">
                            Top Header
                        </label>
                        <input id="top_header" name="top_header" type="text"
                            value="{{ old('top_header', $setting->top_header ?? 'Get in touch') }}"
                            class="w-full rounded-lg border border-slate-300 px-4 py-3 outline-none focus:border-cyan-500 focus:ring-2 focus:ring-cyan-100">
                    </div>

                    <div>
                        <label for="header_description" class="mb-2 block text-sm font-semibold text-slate-700">
                            Header Description
                        </label>
                        <input id="header_description" name="header_description" type="text"
                            value="{{ old('header_description', $setting->header_description ?? 'Contract our team for information about our services') }}"
                            class="w-full rounded-lg border border-slate-300 px-4 py-3 outline-none focus:border-cyan-500 focus:ring-2 focus:ring-cyan-100">
                    </div>
                    <div>
                        <label for="address_description" class="mb-2 block text-sm font-semibold text-slate-700">
                            Address Description
                        </label>
                        <input id="address_description" name="address_description" type="text"
                            value="{{ old('address_description', $setting->address_description ?? 'Contract our team for information about our services') }}"
                            class="w-full rounded-lg border border-slate-300 px-4 py-3 outline-none focus:border-cyan-500 focus:ring-2 focus:ring-cyan-100">
                    </div>
                    <div>
                        <label for="phone_number" class="mb-2 block text-sm font-semibold text-slate-700">
                            Phone Number
                        </label>
                        <input id="phone_number" name="phone_number" type="text"
                            value="{{ old('phone_number', $setting->phone_number ?? '+880 1XXXXXXXXX') }}"
                            class="w-full rounded-lg border border-slate-300 px-4 py-3 outline-none focus:border-cyan-500 focus:ring-2 focus:ring-cyan-100">
                    </div>
                    <div>
                        <label for="email" class="mb-2 block text-sm font-semibold text-slate-700">
                            Email
                        </label>
                        <input id="email" name="email" type="email"
                            value="{{ old('email', $setting->email ?? 'info@gmail.com') }}"
                            class="w-full rounded-lg border border-slate-300 px-4 py-3 outline-none focus:border-cyan-500 focus:ring-2 focus:ring-cyan-100">
                    </div>
                    <div>
                        <label for="business_our" class="mb-2 block text-sm font-semibold text-slate-700">
                            Business Hours
                        </label>
                        <input id="business_our" name="business_our" type="text"
                            value="{{ old('business_our', $setting->business_our ?? 'Saturday – Thursday: 9:00 AM – 6:00 PM') }}"
                            class="w-full rounded-lg border border-slate-300 px-4 py-3 outline-none focus:border-cyan-500 focus:ring-2 focus:ring-cyan-100">
                    </div>

                </div>
            </div>




            {{-- Action Buttons --}}
            <div class="flex flex-wrap items-center gap-3 border-t border-slate-100 pt-6">
                <button type="submit"
                    class="rounded-lg bg-cyan-600 px-6 py-3 font-semibold text-white transition hover:bg-cyan-700">
                    Save Changes
                </button>

                <a href="{{ route('contracts') }}" target="_blank"
                    class="rounded-lg border border-slate-300 px-6 py-3 font-semibold text-slate-700 transition hover:bg-slate-50">
                    View Contracts Page
                </a>
            </div>
        </form>
    </div>
@endsection
