<?php

use App\Http\Controllers\SoalController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('pages.auth.login');
});

Route::middleware(['auth'])->group(function () {
    Route::get('home',function(){
        return view('pages.dashboard');
    })->name('home');

    Route::resource('users',UserController::class);
    Route::resource('soals',SoalController::class);
});

// // Dashboard
// Route::get('/dashboard', function () {
//     return view('pages.dashboard');
// });

// Route::get('/login', function () {
//     return view('pages.auth.login');
// });

// Route::get('/register', function () {
//     return view('pages.auth.register');
// });

// Route::get('/users', function () {
//     return view('pages.users.index');
// });
