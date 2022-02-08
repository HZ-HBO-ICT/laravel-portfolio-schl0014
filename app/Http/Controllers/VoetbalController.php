<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VoetbalController extends Controller
{
    public function show(){
        return view('voetbal');
    }
}
