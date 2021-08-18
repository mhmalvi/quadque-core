@extends('layouts.app')

@section('title', 'Edit Profile')

@section('content')
    <div class="page-section">
        <div class="row mb-32pt">
            <profile-picture></profile-picture>
        </div>
        <div class="row mb-32pt">
            <basic-component 
                username="{{auth()->user()->name}}" 
                name="{{auth()->user()->userInfo->fullname}}" 
                about="{{auth()->user()->userInfo->about}}">
            </basic-component>
        </div>
        <div class="row mb-32pt">
            <contact-component
                phone="{{auth()->user()->userInfo->contact}}"
                address= "{{auth()->user()->userInfo->address}}"
            >
            </contact-component>
        </div>
        <div class="row mb-32pt">
            <password-component></password-component>
        </div>
    </div>
@endsection