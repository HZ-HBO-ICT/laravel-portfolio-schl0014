<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class FaqController extends Controller
{
    /*
     * return the view faq
     */
    public function show($id)
    {
        return view('faqs.index', [
            'faqs' => Faq::all()
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        return view('faqs.index', [
            'faqs' => Faq::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('/faqs.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Application|RedirectResponse|Redirector
     */
    public function store(Request $request)
    {
        Faq::create($this->validateFaq($request));
        return redirect('/faq');
    }

    /**
     * @param Request $request
     * @return array
     */
    public function validateFaq(Request $request): array
    {
        return $request->validate([
            'question' => 'required',
            'answer' => 'required',
            'link' => '',
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Faq $faq
     * @return Application|Factory|View
     */
    public function edit(Faq $faq)
    {

        return view('/faqs/edit', ['faq' => $faq]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Faq $faq
     * @return Application
     */
    public function update(Request $request, Faq $faq): Application
    {
        $faq->update($this->validateFaq($request));
        return redirect('/faq');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Faq $faq
     * @return Application
     */
    public function destroy(Faq $faq): Application
    {
        $faq->delete();

        return redirect('/faq');
    }
}
