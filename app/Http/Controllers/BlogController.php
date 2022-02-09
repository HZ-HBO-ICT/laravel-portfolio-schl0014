<?php

namespace App\Http\Controllers;

class BlogController extends Controller
{
    /* return the blog view
     *
     */
    public function show()
    {
        return view('blog');
    }
}
