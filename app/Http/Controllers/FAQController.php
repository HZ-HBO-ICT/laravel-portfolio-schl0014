<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FAQController extends Controller
{
    /*
     * return the view FAQ
     */
    public function show()
    {
        return view('FAQ');
    }
}
