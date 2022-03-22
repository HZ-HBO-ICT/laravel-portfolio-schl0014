<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        return view('grades.index', [
            'grades' => Grade::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('/grades.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Application|RedirectResponse|Redirector
     */
    public function store(Request $request)
    {
        Grade::create($this->validateGrade($request));

        return redirect('/grade');
    }

    /**
     * validate of the grade all completed their requirements
     * @param Request $request
     * @return array
     */
    public function validateGrade(Request $request): array
    {
        return $request->validate([
            'quartile' => 'required',
            'course_name' => 'required',
            'Exam' => 'required',
            'EC' => 'required',
            'lowest_passing_grade' => '',
            'beste_grade' => '',
            'passed_at' => '',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @return Application|Factory|View
     */
    public function show()
    {
        return view('grades.index', [
            'grades' => Grade::all()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Grade $grade
     * @return Application|Factory|View
     */
    public function edit(Grade $grade)
    {
        return view('/grades/edit', ['grade' => $grade]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Grade $grade
     * @return Application|RedirectResponse|Redirector
     */
    public function update(Request $request, Grade $grade)
    {
//        Grade::addResult($grade->EC);
            $grade->update($this->validateGrade($request));
        return redirect('/grade');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Grade $grade
     * @return Application|Redirector|RedirectResponse
     */
    public function destroy(Grade $grade)
    {
        $grade->delete();
        return redirect('/grade');
    }
}
