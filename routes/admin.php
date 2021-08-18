<?php

use Illuminate\Support\Facades\Route;

Route::view('dashboard', 'admin.index')->name('dashboard');

Route::prefix('settings')->name('settings.')->group(function () {
    Route::view('/general', 'settings.general')->name('general');
});
