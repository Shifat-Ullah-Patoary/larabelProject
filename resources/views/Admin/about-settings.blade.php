@extends('layouts.admin')

@section('title', 'About Page Settings | Diamond Group')

@section('content')
    <div class="mx-auto max-w-4xl">

        <div class="mb-8">
            <h1 class="text-2xl font-bold text-slate-900">
                About Page Settings
            </h1>
            <p class="mt-2 text-sm text-slate-500">
                Edit the text, section headings, images, and founder information for the About Us page.
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

        <form action="{{ route('admin.about-settings.update') }}" method="POST" enctype="multipart/form-data"
            class="space-y-8 rounded-2xl border border-slate-200 bg-white p-6 shadow-sm sm:p-8">

            @csrf
            @method('PUT')

            {{-- =====================================================
                 1. HERO SECTION
            ===================================================== --}}
            <div class="border-b border-slate-200 pb-6">
                <h2 class="text-lg font-bold text-slate-800">1. Hero Section</h2>
                <p class="text-xs text-slate-500">Manage the top banner heading and background image.</p>
                
                <div class="mt-4 space-y-4">
                    <div>
                        <label for="hero_badge" class="mb-2 block text-sm font-semibold text-slate-700">
                            Hero Badge Text
                        </label>
                        <input id="hero_badge" name="hero_badge" type="text"
                            value="{{ old('hero_badge', $setting->hero_badge ?? 'About Diamond Group') }}"
                            class="w-full rounded-lg border border-slate-300 px-4 py-3 outline-none focus:border-cyan-500 focus:ring-2 focus:ring-cyan-100">
                    </div>

                    <div class="grid gap-4 sm:grid-cols-2">
                        <div>
                            <label for="hero_title_part_1" class="mb-2 block text-sm font-semibold text-slate-700">
                                Title (Part 1)
                            </label>
                            <input id="hero_title_part_1" name="hero_title_part_1" type="text"
                                value="{{ old('hero_title_part_1', $setting->hero_title_part_1 ?? 'Building connections') }}"
                                class="w-full rounded-lg border border-slate-300 px-4 py-3 outline-none focus:border-cyan-500 focus:ring-2 focus:ring-cyan-100">
                        </div>

                        <div>
                            <label for="hero_title_part_2" class="mb-2 block text-sm font-semibold text-slate-700">
                                Title Highlighted (Part 2)
                            </label>
                            <input id="hero_title_part_2" name="hero_title_part_2" type="text"
                                value="{{ old('hero_title_part_2', $setting->hero_title_part_2 ?? 'and stronger communities.') }}"
                                class="w-full rounded-lg border border-slate-300 px-4 py-3 outline-none focus:border-cyan-500 focus:ring-2 focus:ring-cyan-100">
                        </div>
                    </div>

                    <div>
                        <label for="hero_description" class="mb-2 block text-sm font-semibold text-slate-700">
                            Hero Description
                        </label>
                        <textarea id="hero_description" name="hero_description" rows="3"
                            class="w-full rounded-lg border border-slate-300 px-4 py-3 outline-none focus:border-cyan-500 focus:ring-2 focus:ring-cyan-100">{{ old('hero_description', $setting->hero_description) }}</textarea>
                    </div>

                    <div>
                        <label for="hero_bg_image" class="mb-2 block text-sm font-semibold text-slate-700">
                            Hero Background Image
                        </label>

                        @if ($setting->hero_bg_image)
                            <div class="mb-4">
                                <img src="{{ asset('storage/' . $setting->hero_bg_image) }}" alt="Hero Background"
                                    class="max-h-64 w-full rounded-xl border border-slate-200 object-cover">
                                <p class="mt-2 text-xs text-slate-500">Current background image.</p>
                            </div>
                        @endif

                        <input id="hero_bg_image" name="hero_bg_image" type="file"
                            accept=".jpg,.jpeg,.png,.webp,image/jpeg,image/png,image/webp"
                            class="block w-full rounded-lg border border-slate-300 p-3 text-sm text-slate-600 file:mr-4 file:rounded-md file:border-0 file:bg-slate-100 file:px-4 file:py-2 file:font-semibold">
                    </div>
                </div>
            </div>


            {{-- =====================================================
                 2. STORY & MISSION SECTION
            ===================================================== --}}
            <div class="border-b border-slate-200 pb-6">
                <h2 class="text-lg font-bold text-slate-800">2. Our Story & Mission</h2>
                <p class="text-xs text-slate-500">Manage company introduction and mission card text.</p>

                <div class="mt-4 space-y-4">
                    <div>
                        <label for="story_badge" class="mb-2 block text-sm font-semibold text-slate-700">
                            Story Badge Tag
                        </label>
                        <input id="story_badge" name="story_badge" type="text"
                            value="{{ old('story_badge', $setting->story_badge ?? 'Our Story') }}"
                            class="w-full rounded-lg border border-slate-300 px-4 py-3 outline-none focus:border-cyan-500 focus:ring-2 focus:ring-cyan-100">
                    </div>

                    <div>
                        <label for="story_title" class="mb-2 block text-sm font-semibold text-slate-700">
                            Story Heading
                        </label>
                        <input id="story_title" name="story_title" type="text"
                            value="{{ old('story_title', $setting->story_title ?? 'One group. Multiple ways to help.') }}"
                            class="w-full rounded-lg border border-slate-300 px-4 py-3 outline-none focus:border-cyan-500 focus:ring-2 focus:ring-cyan-100">
                    </div>

                    <div>
                        <label for="story_description" class="mb-2 block text-sm font-semibold text-slate-700">
                            Story Description
                        </label>
                        <textarea id="story_description" name="story_description" rows="4"
                            class="w-full rounded-lg border border-slate-300 px-4 py-3 outline-none focus:border-cyan-500 focus:ring-2 focus:ring-cyan-100">{{ old('story_description', $setting->story_description) }}</textarea>
                    </div>

                    <div class="pt-2">
                        <label for="mission_title" class="mb-2 block text-sm font-semibold text-slate-700">
                            Mission Card Title
                        </label>
                        <input id="mission_title" name="mission_title" type="text"
                            value="{{ old('mission_title', $setting->mission_title ?? 'Making progress easier for our customers.') }}"
                            class="w-full rounded-lg border border-slate-300 px-4 py-3 outline-none focus:border-cyan-500 focus:ring-2 focus:ring-cyan-100">
                    </div>

                    <div>
                        <label for="mission_description" class="mb-2 block text-sm font-semibold text-slate-700">
                            Mission Card Description
                        </label>
                        <textarea id="mission_description" name="mission_description" rows="3"
                            class="w-full rounded-lg border border-slate-300 px-4 py-3 outline-none focus:border-cyan-500 focus:ring-2 focus:ring-cyan-100">{{ old('mission_description', $setting->mission_description) }}</textarea>
                    </div>

                    <div>
                        <label for="mission_image" class="mb-2 block text-sm font-semibold text-slate-700">
                            Mission Side Image
                        </label>

                        @if ($setting->mission_image)
                            <div class="mb-4">
                                <img src="{{ asset('storage/' . $setting->mission_image) }}" alt="Mission Image"
                                    class="max-h-64 w-full rounded-xl border border-slate-200 object-cover">
                            </div>
                        @endif

                        <input id="mission_image" name="mission_image" type="file"
                            accept=".jpg,.jpeg,.png,.webp,image/jpeg,image/png,image/webp"
                            class="block w-full rounded-lg border border-slate-300 p-3 text-sm text-slate-600 file:mr-4 file:rounded-md file:border-0 file:bg-slate-100 file:px-4 file:py-2 file:font-semibold">
                    </div>
                </div>
            </div>


            {{-- =====================================================
                 3. FOUNDER SECTION
            ===================================================== --}}
            <div class="pb-2">
                <h2 class="text-lg font-bold text-slate-800">3. Founder Section</h2>
                <p class="text-xs text-slate-500">Edit information about the founder and leadership.</p>

                <div class="mt-4 space-y-4">
                    <div class="grid gap-4 sm:grid-cols-2">
                        <div>
                            <label for="founder_name" class="mb-2 block text-sm font-semibold text-slate-700">
                                Founder Name
                            </label>
                            <input id="founder_name" name="founder_name" type="text"
                                value="{{ old('founder_name', $setting->founder_name ?? 'Founder Name') }}"
                                class="w-full rounded-lg border border-slate-300 px-4 py-3 outline-none focus:border-cyan-500 focus:ring-2 focus:ring-cyan-100">
                        </div>

                        <div>
                            <label for="founder_designation" class="mb-2 block text-sm font-semibold text-slate-700">
                                Designation
                            </label>
                            <input id="founder_designation" name="founder_designation" type="text"
                                value="{{ old('founder_designation', $setting->founder_designation ?? 'Founder & Managing Director, Diamond Group') }}"
                                class="w-full rounded-lg border border-slate-300 px-4 py-3 outline-none focus:border-cyan-500 focus:ring-2 focus:ring-cyan-100">
                        </div>
                    </div>

                    <div>
                        <label for="founder_bio_1" class="mb-2 block text-sm font-semibold text-slate-700">
                            Bio Paragraph 1
                        </label>
                        <textarea id="founder_bio_1" name="founder_bio_1" rows="3"
                            class="w-full rounded-lg border border-slate-300 px-4 py-3 outline-none focus:border-cyan-500 focus:ring-2 focus:ring-cyan-100">{{ old('founder_bio_1', $setting->founder_bio_1) }}</textarea>
                    </div>

                    <div>
                        <label for="founder_bio_2" class="mb-2 block text-sm font-semibold text-slate-700">
                            Bio Paragraph 2
                        </label>
                        <textarea id="founder_bio_2" name="founder_bio_2" rows="3"
                            class="w-full rounded-lg border border-slate-300 px-4 py-3 outline-none focus:border-cyan-500 focus:ring-2 focus:ring-cyan-100">{{ old('founder_bio_2', $setting->founder_bio_2) }}</textarea>
                    </div>

                    <div>
                        <label for="founder_quote" class="mb-2 block text-sm font-semibold text-slate-700">
                            Founder Quote
                        </label>
                        <input id="founder_quote" name="founder_quote" type="text"
                            value="{{ old('founder_quote', $setting->founder_quote) }}"
                            placeholder="Building trust, creating opportunities..."
                            class="w-full rounded-lg border border-slate-300 px-4 py-3 outline-none focus:border-cyan-500 focus:ring-2 focus:ring-cyan-100">
                    </div>

                    <div>
                        <label for="founder_image" class="mb-2 block text-sm font-semibold text-slate-700">
                            Founder Photo
                        </label>

                        @if ($setting->founder_image)
                            <div class="mb-4">
                                <img src="{{ asset('storage/' . $setting->founder_image) }}" alt="Founder Photo"
                                    class="max-h-64 rounded-xl border border-slate-200 object-cover">
                            </div>
                        @endif

                        <input id="founder_image" name="founder_image" type="file"
                            accept=".jpg,.jpeg,.png,.webp,image/jpeg,image/png,image/webp"
                            class="block w-full rounded-lg border border-slate-300 p-3 text-sm text-slate-600 file:mr-4 file:rounded-md file:border-0 file:bg-slate-100 file:px-4 file:py-2 file:font-semibold">
                    </div>
                </div>
            </div>

            {{-- Action Buttons --}}
            <div class="flex flex-wrap items-center gap-3 border-t border-slate-100 pt-6">
                <button type="submit"
                    class="rounded-lg bg-cyan-600 px-6 py-3 font-semibold text-white transition hover:bg-cyan-700">
                    Save Changes
                </button>

                <a href="{{ route('aboutus') }}" target="_blank"
                    class="rounded-lg border border-slate-300 px-6 py-3 font-semibold text-slate-700 transition hover:bg-slate-50">
                    View About Page
                </a>
            </div>
        </form>
    </div>
@endsection