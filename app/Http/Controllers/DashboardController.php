<?php

namespace App\Http\Controllers;

use App\Models\Grade;

class DashboardController extends Controller
{
    /*
     * return the view dashboard
     */
    public function show()
    {
        return view('dashboard', [
            'grades' => Grade::all()
        ]);
    }
}
