<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function showDashboard()
    {
        return view('Admin.dashboard');
    }
}
