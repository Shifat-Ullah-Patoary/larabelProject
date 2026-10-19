@extends('layouts.admin')

@section('title', 'Home Page Settings | Diamond Group')

@section('content')
    <div class="mx-auto max-w-4xl">

        <div class="mb-8">
            <h1 class="text-2xl font-bold text-slate-900">
                Home Page Settings
            </h1>
            <p class="mt-2 text-sm text-slate-500">
                Edit the text, banner image, and button displayed on your website.
            </p>
        </div>

        @if (session('success'))
            <div
                class="mb-6 rounded-lg border border-green-200 bg-green-50
                    px-4 py-3 text-sm text-green-800">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="mb-6 rounded-lg border border-red-200 bg-red-50
                    px-4 py-3 text-sm text-red-800">
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

        <form action="{{ route('admin.home-settings.update') }}" method="POST" enctype="multipart/form-data"
            class="space-y-6 rounded-2xl border border-slate-200
                 bg-white p-6 shadow-sm sm:p-8">

            @csrf
            @method('PUT')



            <div>
                <label for="title" class="mb-2 block text-sm font-semibold text-slate-700">
                    Home Page Headings
                </label>
                <input id="title" name="title" type="text" value="{{ old('title', $settings->title) }}" required
                    maxlength="255"
                    class="w-full rounded-lg border border-slate-300
                          px-4 py-3 outline-none focus:border-cyan-500
                          focus:ring-2 focus:ring-cyan-100">
            </div>

            <div>
                <label for="description" class="mb-2 block text-sm font-semibold text-slate-700">
                    Description
                </label>
                <textarea id="description" name="description" rows="5"
                    class="w-full rounded-lg border border-slate-300
                             px-4 py-3 outline-none focus:border-cyan-500
                             focus:ring-2 focus:ring-cyan-100">{{ old('description', $settings->description) }}</textarea>
            </div>

            <div>
                <label for="image" class="mb-2 block text-sm font-semibold text-slate-700">
                    Banner Image
                </label>

                @if ($settings->image)
                    <div class="mb-4">
                        <img src="{{ asset('storage/' . $settings->image) }}" alt="Current home page banner"
                            class="max-h-64 w-full rounded-xl border
                                border-slate-200 object-cover">
                        <p class="mt-2 text-xs text-slate-500">
                            Current image. Upload another image to replace it.
                        </p>
                    </div>
                @endif

                <input id="image" name="image" type="file"
                    accept=".jpg,.jpeg,.png,.webp,image/jpeg,image/png,image/webp"
                    class="block w-full rounded-lg border border-slate-300
                          p-3 text-sm text-slate-600
                          file:mr-4 file:rounded-md file:border-0
                          file:bg-slate-100 file:px-4 file:py-2
                          file:font-semibold">

                <p class="mt-2 text-xs text-slate-500">
                    JPG, PNG or WebP. Maximum file size: 5 MB.
                </p>
            </div>


             <div>
                <label for="travel_title" class="mb-2 block text-sm font-semibold text-slate-700">
                    Travel & Tours Headings
                </label>
                <input id="travel_title" name="travel_title" type="text" value="{{ old('travel_title', $settings->travel_title) }}" required
                    maxlength="255"
                    class="w-full rounded-lg border border-slate-300
                          px-4 py-3 outline-none focus:border-cyan-500
                          focus:ring-2 focus:ring-cyan-100">
            </div>

            <div>
                <label for="travel_description" class="mb-2 block text-sm font-semibold text-slate-700">
                    Description
                </label>
                <textarea id="travel_description" name="travel_description" rows="5"
                    class="w-full rounded-lg border border-slate-300
                             px-4 py-3 outline-none focus:border-cyan-500
                             focus:ring-2 focus:ring-cyan-100">{{ old('travel_description', $settings->travel_description) }}</textarea>
            </div>


                <div>
                    <label for="travel_image" class="mb-2 block text-sm font-semibold text-slate-700">
                        Travel & Tours Image
                    </label>

                    @if ($settings->travel_image)
                        <div class="mb-4">
                            <img src="{{ asset('storage/' . $settings->travel_image) }}" alt="Current travel image"
                                {{-- class="h-48 w-full rounded-xl object-cover" --}}
                                class="max-h-64 w-full rounded-xl border
                                    border-slate-200 object-cover">
                            <p class="mt-2 text-xs text-slate-500">
                                Upload a new image to replace the current one.
                            </p>
                        </div>
                    @endif

                    <input id="travel_image" name="travel_image" type="file"
                        accept=".jpg,.jpeg,.png,.webp,image/jpeg,image/png,image/webp"
                        class="block w-full rounded-lg border border-slate-300 p-3 text-sm
                file:mr-4 file:rounded-md file:border-0
                file:bg-slate-100 file:px-4 file:py-2">

                    <p class="mt-2 text-xs text-slate-500">
                        JPG, PNG or WebP. Maximum size: 5 MB.
                    </p>
                </div>

                 <div>
                <label for="transport_title" class="mb-2 block text-sm font-semibold text-slate-700">
                    Transport Headings
                </label>
                <input id="transport_title" name="transport_title" type="text" value="{{ old('transport_title', $settings->transport_title) }}" required
                    maxlength="255"
                    class="w-full rounded-lg border border-slate-300
                          px-4 py-3 outline-none focus:border-cyan-500
                          focus:ring-2 focus:ring-cyan-100">
            </div>

            <div>
                <label for="transport_description" class="mb-2 block text-sm font-semibold text-slate-700">
                    Description
                </label>
                <textarea id="transport_description" name="transport_description" rows="5"
                    class="w-full rounded-lg border border-slate-300
                             px-4 py-3 outline-none focus:border-cyan-500
                             focus:ring-2 focus:ring-cyan-100">{{ old('transport_description', $settings->transport_description) }}</textarea>
            </div>


                <div>
                    <label for="transport_image" class="mb-2 block text-sm font-semibold text-slate-700">
                        Transport Image
                    </label>

                    @if ($settings->transport_image)
                        <div class="mb-4">
                            <img src="{{ asset('storage/' . $settings->transport_image) }}" alt="Current transport image"
                                {{-- class="h-48 w-full rounded-xl object-cover" --}}
                                class="max-h-64 w-full rounded-xl border
                                    border-slate-200 object-cover">
                            <p class="mt-2 text-xs text-slate-500">
                                Upload a new image to replace the current one.
                            </p>
                        </div>
                    @endif

                    <input id="transport_image" name="transport_image" type="file"
                        accept=".jpg,.jpeg,.png,.webp,image/jpeg,image/png,image/webp"
                        class="block w-full rounded-lg border border-slate-300 p-3 text-sm
                file:mr-4 file:rounded-md file:border-0
                file:bg-slate-100 file:px-4 file:py-2">

                    <p class="mt-2 text-xs text-slate-500">
                        JPG, PNG or WebP. Maximum size: 5 MB.
                    </p>
                </div>

                 <div>
                <label for="construction_title" class="mb-2 block text-sm font-semibold text-slate-700">
                    Construction Headings
                </label>
                <input id="construction_title" name="construction_title" type="text" value="{{ old('construction_title', $settings->construction_title) }}" required
                    maxlength="255"
                    class="w-full rounded-lg border border-slate-300
                          px-4 py-3 outline-none focus:border-cyan-500
                          focus:ring-2 focus:ring-cyan-100">
            </div>

            <div>
                <label for="construction_description" class="mb-2 block text-sm font-semibold text-slate-700">
                    Description
                </label>
                <textarea id="construction_description" name="construction_description" rows="5"
                    class="w-full rounded-lg border border-slate-300
                             px-4 py-3 outline-none focus:border-cyan-500
                             focus:ring-2 focus:ring-cyan-100">{{ old('construction_description', $settings->construction_description) }}</textarea>
            </div>

                <div>
                    <label for="construction_image" class="mb-2 block text-sm font-semibold text-slate-700">
                        Construction Image
                    </label>

                    @if ($settings->construction_image)
                        <div class="mb-4">
                            <img src="{{ asset('storage/' . $settings->construction_image) }}" alt="Current construction image"
                                {{-- class="h-48 w-full rounded-xl object-cover" --}}
                                class="max-h-64 w-full rounded-xl border
                                    border-slate-200 object-cover">
                            <p class="mt-2 text-xs text-slate-500">
                                Upload a new image to replace the current one.
                            </p>
                        </div>
                    @endif

                    <input id="construction_image" name="construction_image" type="file"
                        accept=".jpg,.jpeg,.png,.webp,image/jpeg,image/png,image/webp"
                        class="block w-full rounded-lg border border-slate-300 p-3 text-sm
                file:mr-4 file:rounded-md file:border-0
                file:bg-slate-100 file:px-4 file:py-2">

                    <p class="mt-2 text-xs text-slate-500">
                        JPG, PNG or WebP. Maximum size: 5 MB.
                    </p>
                </div>


            <div>
                <label for="button_text" class="mb-2 block text-sm font-semibold text-slate-700">
                    Button Text
                </label>
                <input id="button_text" name="button_text" type="text"
                    value="{{ old('button_text', $settings->button_text) }}" required maxlength="100"
                    class="w-full rounded-lg border border-slate-300
                          px-4 py-3 outline-none focus:border-cyan-500
                          focus:ring-2 focus:ring-cyan-100">
            </div>

            <div>
                <label for="button_link" class="mb-2 block text-sm font-semibold text-slate-700">
                    Button Destination
                </label>
                <input id="button_link" name="button_link" type="text"
                    value="{{ old('button_link', $settings->button_link) }}" required maxlength="2048"
                    placeholder="/contracts or https://example.com"
                    class="w-full rounded-lg border border-slate-300
                          px-4 py-3 outline-none focus:border-cyan-500
                          focus:ring-2 focus:ring-cyan-100">

                <p class="mt-2 text-xs text-slate-500">
                    Example: /contracts or a full HTTP(S) URL.
                </p>
            </div>

            <div class="flex flex-wrap items-center gap-3 border-t
                    border-slate-100 pt-6">
                <button type="submit"
                    class="rounded-lg bg-cyan-600 px-6 py-3
                           font-semibold text-white transition
                           hover:bg-cyan-700">
                    Save Changes
                </button>

                <a href="{{ route('index') }}" target="_blank"
                    class="rounded-lg border border-slate-300 px-6 py-3
                      font-semibold text-slate-700 transition
                      hover:bg-slate-50">
                    View Home Page
                </a>
            </div>
        </form>
    </div>
@endsection
