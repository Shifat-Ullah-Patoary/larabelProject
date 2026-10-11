<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

class AboutUsController extends Controller
{
    public function showAboutUs()
    {
      

         return view('aboutus');
    }
}
