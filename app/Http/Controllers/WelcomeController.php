<?php


namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

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
