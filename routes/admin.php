<?php

use Illuminate\Support\Facades\Route;

Route::view('dashboard', 'admin.index')->name('dashboard');

Route::prefix('account')->name('account.')->group(function () {
    Route::view('/edit-profile', 'account.profile')->name('profile');
    Route::view('/activities', 'account.activities')->name('activities');
});

Route::prefix('settings')->name('settings.')->group(function () {
    Route::view('/general', 'settings.general')->name('general');
});
