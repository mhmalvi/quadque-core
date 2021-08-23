<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CourseCreateRequest;
use Illuminate\Http\Request;


class CoursesController extends Controller
{
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
}
