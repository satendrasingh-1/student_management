<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Course;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $courses = Course::all();
        return view ('courses.index')->with('courses', $courses);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('courses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $input = $request->all();
        Course::create($input);
        return redirect('courses')->with('flash_message', 'Courses Addedd!');
    }
    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'name' => 'required|string|max:255',
    //         'course_id' => 'required|exists:courses,id', // Ensure the course exists
    //         'start_date' => 'required|date',  // Validate that the start date is a valid date
    //     ]);

    //     $input = $request->all();
    //     Batch::create($input);
    //     return redirect('batches')->with('flash_message', 'Batch Created!');
    // }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $courses = Course::find($id);
        return view('courses.show')->with('courses', $courses);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $courses = Course::find($id);
        return view('courses.edit')->with('courses', $courses);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $courses = Course::find($id);
        $input = $request->all();
        $courses->update($input);
        return redirect('courses')->with('flash_message', 'courses Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Course::destroy($id);
        return redirect('courses')->with('flash_message', 'course deleted!');
    }
}
