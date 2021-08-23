@extends('layouts.app')

@section('title', 'Create New Course')

@section('links')
    <a href="{{route('admin.course.index')}}" class="btn btn-outline-secondary">
    <span class="material-icons mr-2">keyboard_return</span>
        Return Back
    </a>
@endsection

@push('css')
    <link rel="stylesheet" href="{{asset('assets/css/sweetalert.css')}}">
@endpush

@section('content')
    <div class="page-section">
        <course-create></course-create>
    </div>
@endsection
