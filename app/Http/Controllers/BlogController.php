<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    /* return the blog view
     *
     */
    public function show(){
        return view('blog');
    }

}
