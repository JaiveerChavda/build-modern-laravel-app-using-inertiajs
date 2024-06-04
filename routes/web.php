<?php

use App\Models\User;
use Illuminate\Support\Facades\Request;
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
        'users' => User::query()
            ->when(
                Request::input('search'),
                fn ($query, $search) =>
                $query->where('name', 'like', "%$search%")
            )
            ->paginate(10)
            ->withQueryString()
            ->through(fn ($user) => [
                'id' => $user->id,
                'name' => $user->name,
            ]),
        'filter' => Request::only(['search'])
    ]);
});

Route::post(
    'logout',
    fn () =>
    dd(request('foo'))
);
