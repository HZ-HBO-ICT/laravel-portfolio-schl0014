<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Request;

class BlogController extends Controller
{
    /*
     *return the blog view
     */
    public function show()
    {
        return view('blog', [
            'articles' => Article::all()
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('blog', [
            'articles' => Article::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View|Response
     */
    public function create()
    {
        return view('blog');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return Application|RedirectResponse|Response|Redirector
     */
    public function store(Request $request)
    {
        $article = new Article();
        $article->title = request('title');
        $article->body = request('body');
        $article->link = request('link');
        $article->link_name = request('link_name');

        $article->save();

        return redirect('/blog');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Application|Factory|View
     */
    public function edit($id)
    {
        $article = Article::find($id);
        return view('blogs.edit', ['article' => $article]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @return Application|Redirector|RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $article = Article::find($id);
        $article->title = request('title');
        $article->body = request('body');
        $article->link = request('link');
        $article->link_name = request('link_name');

        $article->save();
//
        return redirect('/blog');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        $article = Article::find($id);
        $article->delete();

        return redirect('/blog');
    }
}
