<?php

use App\Http\Controllers\Auth\LoginController;
use App\Models\User;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\Rules\Password;
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

    Route::get('/users', function () {
        return Inertia::render('Users/Index', [
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

    Route::get('users/create', function () {
        return Inertia::render('Users/Create');
    });

    Route::post('users', function () {
        $validated = request()->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => ['required',Password::min(8)]
        ]);

        User::create($validated);

        return redirect()->to('/users');
    });
});
