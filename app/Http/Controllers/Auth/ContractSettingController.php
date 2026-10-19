<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\ContractPageSetting;
use Illuminate\Http\Request;

class ContractSettingController extends Controller
{
    public function index()
    {

        $setting = ContractPageSetting::first() ?? new ContractPageSetting;

        return view('Admin.contract-settings', compact('setting'));
    }

    public function update(Request $request)
    {
        $setting = ContractPageSetting::first() ?? new ContractPageSetting;
        $validated = $request->validate([
            'top_header' => 'nullable|string|max:255',
            'header_description' => 'nullable|string|max:255',
            'address_description' => 'nullable|string|max:255',
            'phone_number' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
            'business_our' => 'nullable|string|max:255',
        ]);

        $setting->fill($validated)->save();

        return redirect()->back()->with('success', 'Contract Page Settings updated successfully');
    }
}
