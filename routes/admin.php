<?php

use Illuminate\Support\Facades\Route;

Route::view('dashboard', 'admin.index')->name('dashboard');

Route::post("tmp-file-upload", "FileUploadController@storeFile");

Route::prefix('course')->name('course.')->group(function () {
    Route::get('all-courses', "CoursesController@index")->name('index');
    Route::get('create', "CoursesController@create")->name('create');
    Route::post('store', 'CoursesController@store');
    Route::get('{course}/trash', 'CoursesController@trash')->name('trash');
});

Route::prefix('settings')->name('settings.')->group(function () {
    Route::view('/general', 'settings.general')->name('general');
});
