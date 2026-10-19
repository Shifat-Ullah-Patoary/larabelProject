<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

class TeamController extends Controller
{
    public function showTeam()
    {
        return view('team');
    }
}
