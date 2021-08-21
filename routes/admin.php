<?php

use Illuminate\Support\Facades\Route;

Route::view('dashboard', 'admin.index')->name('dashboard');

Route::prefix('course')->name('course.')->group(function () {
    Route::view('all-courses', 'admin.courses.index')->name('index');
    Route::get('create', "CoursesController@create")->name('create');
    Route::post("file-upload", "FileUploadController@storeFile");
    Route::post('store', 'CoursesController@store');
});

Route::prefix('settings')->name('settings.')->group(function () {
    Route::view('/general', 'settings.general')->name('general');
});
