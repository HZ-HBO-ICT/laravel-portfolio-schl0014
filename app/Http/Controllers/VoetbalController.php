<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VoetbalController extends Controller
{
    /*
     * return the view voetbal
     */
    public function show()
    {
        return view('voetbal');
    }
}
