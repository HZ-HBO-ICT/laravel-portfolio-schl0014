<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RacingController extends Controller
{
    /*
     * return the view racing
     */
     public function show()
    {
        return view('racing');
    }
}
