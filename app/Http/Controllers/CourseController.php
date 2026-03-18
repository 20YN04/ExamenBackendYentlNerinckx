<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::where('active', true)
                         ->orderBy('title', 'asc')
                         ->get();

        $allCourses = Course::orderBy('title', 'asc')->get();

        return view('courses.index', compact('courses', 'allCourses'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'       => 'required|min:3',
            'description' => 'required',
        ]);

        Course::create([
            'title'       => $request->title,
            'description' => $request->description,
            'active'      => $request->has('active'),
        ]);

        return redirect()->route('courses.index');
    }

    public function toggle(Course $course)
    {
        $course->active = !$course->active;
        $course->save();

        return redirect()->route('courses.index');
    }
}