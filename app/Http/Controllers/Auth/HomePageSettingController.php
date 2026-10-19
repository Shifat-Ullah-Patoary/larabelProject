<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\HomePageSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomePageSettingController extends Controller
{
    public function index()
    {
        $settings = HomePageSetting::query()->firstOrCreate([], [
            'title' => 'Welcome to Diamond Group',
            'description' => 'Delivering excellence across travel experiences, logistics solutions, and heavy construction materials.',
            'button_text' => 'Contact Us',
            'button_link' => '/contracts',
        ]);

        return view('Admin.home-settings', compact('settings'));
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string|max:10000',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:5120',
            'travel_image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:5120',
            'transport_image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:5120',
            'button_text' => 'required|string|max:100',
            'button_link' => 'required|string|max:255',

            'travel_title' => 'required|string|max:255',
            'travel_description' => 'nullable|string|max:10000',

            'transport_title' => 'required|string|max:255',
            'transport_description' => 'nullable|string|max:10000',

            'construction_title' => 'required|string|max:255',
            'construction_description' => 'nullable|string|max:10000',
        ]);

        $settings = HomePageSetting::query()->firstOrCreate([], [
            'title' => 'Welcome to Diamond Group',
            'description' => 'Delivering excellence across travel experiences, logistics solutions, and heavy construction materials.',
            'button_text' => 'Contact Us',
            'button_link' => '/contracts',

            'travel_title' => 'Diamond Travel & Tours',
            'travel_description' => 'Exceptional travel packages, flight reservations, tour management, and personalized holiday itineraries around the world.',

            'transport_title' => 'Diamond Transport',
            'transport_description' => 'Reliable freight logistics, fleet rental services, and nationwide commercial transportation solutions built on safety and speed.',

            'construction_title' => 'Brick, Sand & Concrete',
            'construction_description' => 'High-grade ready-mix concrete, sand, cement supply, and heavy material delivery tailored for durable infrastructure construction.',
        ]);

        // banner image

        unset($validated['image']);

        $oldImage = $settings->image;

        if ($request->hasFile('image')) {
            $newImage = $request->file('image')->store('home-page', 'public');
            $settings->image = $newImage;
        }

        if ($request->hasFile('image') && $oldImage) {
            Storage::disk('public')->delete($oldImage);
        }

        // travel image
        unset($validated['travel_image']);
        $oldTravelImage = $settings->travel_image;
        if ($request->hasFile('travel_image')) {
            $newTravelImage = $request->file('travel_image')->store('home-page', 'public');

            $settings->travel_image = $newTravelImage;
        }

        if ($request->hasFile('travel_image') && $oldTravelImage) {
            Storage::disk('public')->delete($oldTravelImage);
        }

        // transport image
        unset($validated['transport_image']);
        $oldTransportImage = $settings->transport_image;
        if ($request->hasFile('transport_image')) {
            $newTransportImage = $request->file('transport_image')->store('home-page', 'public');
            $settings->transport_image = $newTransportImage;
        }
        if ($request->hasFile('transport_image') && $oldTransportImage) {
            Storage::disk('public')->delete($oldTransportImage);
        }

        // construction image
        unset($validated['construction_image']);
        $oldConstructionImage = $settings->construction_image;
        if ($request->hasFile('construction_image')) {
            $newConstructionImage = $request->file('construction_image')->store('home-page', 'public');
            $settings->construction_image = $newConstructionImage;
        }
        if ($request->hasFile('construction_image') && $oldConstructionImage) {
            Storage::disk('public')->delete($oldConstructionImage);
        }

        // save the updated settings
        $settings->fill($validated);
        $settings->save();

        // Redirect back with a success message
        return redirect()
            ->route('admin.home-settings.index')
            ->with('success', 'Home page settings updated successfully!');
    }
}
