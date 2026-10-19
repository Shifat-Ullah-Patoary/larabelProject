<?php

namespace App\Http\Controllers\Auth; // Recommended namespace for Admin controllers

use App\Http\Controllers\Controller;
use App\Models\AboutPageSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutPageSettingController extends Controller
{
    /**
     * Show the admin settings form with current data.
     */
    public function index()
    {
        // Get existing settings or create a blank instance
        $setting = AboutPageSetting::first() ?? new AboutPageSetting;

        return view('Admin.about-settings', compact('setting'));
    }

    /**
     * Store or update the about page settings in the database.
     */
    public function update(Request $request)
    {
        $setting = AboutPageSetting::first() ?? new AboutPageSetting;

        // 1. Validate Form Input
        $request->validate([
            'hero_badge' => 'nullable|string|max:255',
            'hero_title_part_1' => 'nullable|string|max:255',
            'hero_title_part_2' => 'nullable|string|max:255',
            'hero_description' => 'nullable|string',
            'hero_bg_image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',

            'story_badge' => 'nullable|string|max:255',
            'story_title' => 'nullable|string|max:255',
            'story_description' => 'nullable|string',
            'story_features' => 'nullable|array',

            'mission_title' => 'nullable|string|max:255',
            'mission_description' => 'nullable|string',
            'mission_image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',

            'founder_name' => 'nullable|string|max:255',
            'founder_designation' => 'nullable|string|max:255',
            'founder_bio_1' => 'nullable|string',
            'founder_bio_2' => 'nullable|string',
            'founder_quote' => 'nullable|string',
            'founder_image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        $data = $request->except(['hero_bg_image', 'mission_image', 'founder_image']);

        // 2. Handle File Uploads
        if ($request->hasFile('hero_bg_image')) {
            if ($setting->hero_bg_image) {
                Storage::disk('public')->delete($setting->hero_bg_image);
            }
            $data['hero_bg_image'] = $request->file('hero_bg_image')->store('about', 'public');
        }

        if ($request->hasFile('mission_image')) {
            if ($setting->mission_image) {
                Storage::disk('public')->delete($setting->mission_image);
            }
            $data['mission_image'] = $request->file('mission_image')->store('about', 'public');
        }

        if ($request->hasFile('founder_image')) {
            if ($setting->founder_image) {
                Storage::disk('public')->delete($setting->founder_image);
            }
            $data['founder_image'] = $request->file('founder_image')->store('about', 'public');
        }

        // 3. Save or Update Record
        $setting->fill($data);
        $setting->save();

        return redirect()->back()->with('success', 'About Page settings updated successfully!');
    }

    /**
     * Frontend About Page display method.
     */
    public function about()
    {
        $setting = AboutPageSetting::first() ?? new AboutPageSetting;

        return view('aboutus', compact('setting'));
    }
}
