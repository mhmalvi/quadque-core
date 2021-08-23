@extends('layouts.app')

@section('title', 'Manage Courses')

@section('links')
    <a href="{{route('admin.course.create')}}" class="btn btn-outline-primary">
    <span class="material-icons mr-2">post_add</span>
        Add New Course
    </a>
@endsection

@section('content')
    <div class="page-section">
        <div class="row">
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Course Code</th>
                            <th>Course Title</th>
                            <th>Lessons</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($courses as $course)
                            <tr>
                                <td>{{$course->code}}</td>
                                <td>{{$course->title}}</td>
                                <td>{{$course->lessons}}</td>
                            </tr>
                        @empty
                            
                        @endforelse
                    </tbody>
                </table>

                {{$courses->links()}}
            </div>
        </div>
    </div>
@endsection