@extends('layouts.app')

@section('title', 'Edit Profile')

@section('content')
    <div class="page-section">
        <div class="row mb-32pt">
            <profile-picture></profile-picture>
        </div>
        <div class="row mb-32pt">
            <basic-component></basic-component>
        </div>
        <div class="row mb-32pt">
            <contact-component></contact-component>
        </div>
        <div class="row mb-32pt">
            <password-component></password-component>
        </div>
    </div>
@endsection