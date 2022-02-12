<?php

namespace App\Http\Controllers;

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
