<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::view('/home', 'home');
// Route::view('/login', 'auth.login');
// Route::view('/register', 'auth.register');

// Route::apiResource('posts', PostController::class);