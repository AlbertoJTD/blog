<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCourseRequest;
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

    public function store(StoreCourseRequest $request) {
        // dd($request);
        $formFields = $request->validated();
        $course = Course::create($formFields);

        // return redirect('/courses');
        return redirect()->route('courses.show', $course);
    }

    public function edit(Course $course) {
        return view('courses.edit', [
            'course' => $course
        ]);
    }

    public function update(Request $request, Course $course) {
        $formsFields = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'category' => 'required',
        ]);

        $course->update($formsFields);

        return redirect()->route('courses.show', $course);
    }

    public function destroy(Course $course) {
        $course->delete();

        return redirect()->route('courses.index');
    }
}
