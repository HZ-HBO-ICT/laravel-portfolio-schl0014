<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /*
     * return the view profile
     */
     public function show()
    {
        return view('profile');
    }
}
