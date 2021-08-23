<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CourseCreateRequest;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CoursesController extends Controller
{
    public function index()
    {
        $courses = Course::orderBy('created_at', 'desc')->paginate(3);
        return view('admin.courses.index', compact('courses'));
    }


    public function create()
    {
        return view('admin.courses.create');
    }


    public function store(CourseCreateRequest $request)
    {
        try {
            $request->save();

            return response()->json(['message' => 'success'], 200);
        } catch (\Throwable $th) {
            return response()->json(['message' => $th->getMessage()], 503);
        }
    }


    public function trash(Course $course)
    {
        try {
            $course->delete();

            return back();
        } catch (\Throwable $th) {
            return back();
        }
    }
}
