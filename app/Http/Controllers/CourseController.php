<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index() {
        $courses =  Course::paginate();
        return view('courses.index', compact('courses'));
    }

    public function create() {
        return view('courses.create');
    }

    public function show(Course $course) {
        return view('courses.show', [
            'course' => $course
        ]);
    }

    public function store(Request $request) {
        // dd($request);
        $formsFields = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'category' => 'required',
        ]);

        $course = Course::create($formsFields);

        // return redirect('/courses');
        return redirect()->route('course.show', $course);
    }
}
