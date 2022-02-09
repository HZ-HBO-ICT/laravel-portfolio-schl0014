<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /*
     * return the view welcome
     */
   public function show()
   {
       return view('welcome');
    }

}
