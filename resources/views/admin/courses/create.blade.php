@extends('layouts.app')

@section('title', 'Create New Course')

@push('css')
    <link rel="stylesheet" href="{{asset('assets/css/sweetalert.css')}}">
@endpush

@section('content')
    <div class="page-section">
        <course-create></course-create>
    </div>
@endsection
