<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreInstructorRequest;
use App\Http\Requests\UpdateInstructorRequest;
use App\Models\Instructor;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class InstructorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        $instructors = Instructor::all();

        return view('instructors.index', compact('instructors'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function register(): View
    {
        return view('instructors.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreInstructorRequest  $request
     * @return RedirectResponse
     */
    public function store(StoreInstructorRequest $request): RedirectResponse
    {
        Instructor::create($request->validated());

        return redirect()->route('instructors.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Instructor  $instructor
     * @return View
     */
    public function edit(Instructor $instructors): View
    {
        return view('instructors.edit', compact('instructor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateInstructorRequest  $request
     * @param  Instructor  $instructor
     * @return RedirectResponse
     */
    public function update(UpdateInstructorRequest $request, Instructor $instructor): RedirectResponse
    {
        $instructor->update($request->validated());

        return redirect()->route('instructors.index');
    }

 /**
     * Remove the specified resource from storage.
     *
     * @param  Instructor  $instructor
     * @return RedirectResponse
     */
    public function destroy(Instructor $instructor): RedirectResponse
    {
        $instructor->delete();

        return redirect()->route('instructors.index');
        
    }
}
