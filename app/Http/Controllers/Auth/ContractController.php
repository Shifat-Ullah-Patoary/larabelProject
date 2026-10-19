<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Contract;
use App\Models\ContractPageSetting;
use Illuminate\Http\Request;

class ContractController extends Controller
{
    public function showContracts()
    {
        $setting = ContractPageSetting::query()->first() ?? new ContractPageSetting;

        return view('contracts', compact('setting'));
    }

    public function storeContract(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:contracts,email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        Contract::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'subject' => $request->input('subject'),
            'message' => $request->input('message'),
        ]);

        // Store the contact message in the database or send an email

        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}
