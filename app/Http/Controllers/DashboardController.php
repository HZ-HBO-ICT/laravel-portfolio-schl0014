<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{

    /*
     * return the view dashboard
     */
    public function show()
    {
        return view('dashboard');
    }
}
