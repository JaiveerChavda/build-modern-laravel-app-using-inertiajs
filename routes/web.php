<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/users', function () {
    return Inertia::render('Users', [
        'users' => User::paginate(10),
    ]);
});

Route::post(
    'logout',
    fn () =>
    dd(request('foo'))
);
