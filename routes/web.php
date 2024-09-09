<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\ScrapeController;
use Illuminate\Support\Facades\Route;

Route::get('/register', [RegisterUserController::class, 'create']);
Route::post('/register', [RegisterUserController::class, 'store']);

Route::get('/login', [LoginController::class, 'create']);
Route::post('/login', [LoginController::class, 'store']);
Route::post('/logout', [LoginController::class, 'destroy']);

Route::get('/home', function () {
    return view('user.home');
});



// FOR SCRAPING FUNCTION 
