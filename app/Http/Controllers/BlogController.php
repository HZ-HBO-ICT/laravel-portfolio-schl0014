<?php

namespace App\Http\Controllers;

use App\Models\Article;

class BlogController extends Controller
{
    /*
     *return the blog view
     */
    public function show()
    {
        return view('blog',[
        'articles' => Article::all()
        ]);
    }
}
