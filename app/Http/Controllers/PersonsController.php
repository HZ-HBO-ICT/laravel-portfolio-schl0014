<?php


namespace App\Http\Controllers;

use App\Models\Person;

//use DB;

//use App\Person;


class PersonsController extends Controller
{


    /*
     * return the view welcome
     */
    public function show($name)
    {
        return view('person', [
            'person' => Person::where('name', $name)->firstOrFail()
        ]);
    }
}
