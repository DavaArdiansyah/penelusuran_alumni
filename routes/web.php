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
    Route::middleware('operator')->name('operator.')->prefix('operator')->group(function () {
        Route::get('/dashboard', [App\Http\Controllers\Operator\PageController::class, 'index'])
            ->name('dashboard');
    });


    Route::middleware('admin')->name('Admin.')->prefix('admin')->group(function () {
        Route::get('/dashboard', [App\Http\Controllers\Admin\PageController::class, 'index'])
            ->name('dashboard');
    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
