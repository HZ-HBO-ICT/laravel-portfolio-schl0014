<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class BlogController extends Controller
{
    /*
     *return the blog view
     */
    public function show()
    {
        return view('blogs.index', [
            'blogs' => Blog::all()
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        return view('blogs.index', [
            'blogs' => Blog::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Application|RedirectResponse|Redirector
     */
    public function store(Request $request)
    {
        Blog::create($this->validateBlog($request));
        return redirect('/blog');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('/blogs.create');
    }

    /**
     * validate if the all requirement are implemented
     *
     * @param Request $request
     * @return array
     */
    public function validateBlog(Request $request): array
    {
        return $request->validate([
            'title' => 'required',
            'body' => 'required',
            'link' => '',
            'link_name' => '',

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Blog $blog
     * @return Application
     */
    public function edit(Blog $blog): Application
    {
        return view('/blogs/edit', ['blog' => $blog]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Blog $blog
     * @return Application|Redirector|RedirectResponse
     */
    public function update(Request $request, Blog $blog)
    {
        $blog->update($this->validateBlog($request));

        return redirect('/blog');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Blog $blog
     * @return Application|Redirector|RedirectResponse
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect('/blog');
    }
}
