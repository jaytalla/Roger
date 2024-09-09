<?php

use App\Http\Controllers\RegisterUserController;
use Illuminate\Support\Facades\Route;

Route::get('/register', [RegisterUserController::class, 'create']);
Route::post('/register', [RegisterUserController::class, 'store']);

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/home', function () {
    return view('user.home');
});
