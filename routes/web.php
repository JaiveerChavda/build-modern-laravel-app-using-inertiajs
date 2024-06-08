<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('login', [LoginController::class,'create'])->name('login')->middleware('guest');

Route::post('login', [LoginController::class,'store']);

Route::post('logout', [LoginController::class,'destroy'])->middleware('auth');

Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return Inertia::render('Home');
    });

    Route::get('/about', function () {
        return Inertia::render('About');
    });

    Route::get('/settings', function () {
        return Inertia::render('Settings', [
            'time' => now()->toTimeString()
        ]);
    });

    Route::resource('users', UserController::class);
});
