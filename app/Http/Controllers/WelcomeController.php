<?php


namespace App\Http\Controllers;

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
