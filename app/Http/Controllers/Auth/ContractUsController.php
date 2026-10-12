<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Contacts;
use Illuminate\Http\Request;

class ContractUsController extends Controller
{
    public function showContractUs()
    {
        return view('contractus');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:contacts,email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        Contacts::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'subject' => $request->input('subject'),
            'message' => $request->input('message'),
        ]);

        // Store the contact message in the database or send an email

        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}
