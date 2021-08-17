<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view('/', 'admin.index')->name('admin.dashboard');



Route::prefix('account')->name('account.')->group(function () {
    Route::view('/edit-profile', 'account.profile')->name('profile');
    Route::view('/activities', 'account.activities')->name('activities');
});

Route::prefix('settings')->name('settings.')->group(function () {
    Route::view('/general', 'settings.general')->name('general');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
