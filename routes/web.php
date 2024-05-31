<?php

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

Route::post(
    'logout',
    fn () =>
    dd(request('foo'))
);
