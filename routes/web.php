<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Auth::routes();

Route::get('/', [App\Http\Controllers\Alumni\PageController::class, 'index'])
    ->name('homepage');

Route::middleware(['auth'])->group(function () {
    Route::get('profile', [App\Http\Controllers\Alumni\ProfileController::class, 'index'])
        ->name('profile');
    Route::get('profile-edit', [App\Http\Controllers\Alumni\ProfileController::class, 'edit'])
        ->name('profile-edit');
    Route::put('profile-edit', [App\Http\Controllers\Alumni\ProfileController::class, 'edit_proses'])
        ->name('profile-edit-proses');


    Route::middleware('operator')->name('Operator.')->prefix('operator')->group(function () {
        Route::get('/dashboard', [App\Http\Controllers\Operator\PageController::class, 'index'])
            ->name('dashboard');
        Route::put('/status{Iddata}', [App\Http\Controllers\Operator\PageController::class, 'status'])
            ->name('ganti-status');
        Route::delete('/hapus-data{IdData}', [App\Http\Controllers\Operator\PageController::class, 'destroy'])
            ->name('destroy-data');
    });


    Route::middleware('admin')->name('Admin.')->prefix('admin')->group(function () {
        Route::get('/dashboard', [App\Http\Controllers\Admin\PageController::class, 'index'])
            ->name('dashboard');
    });
});

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
