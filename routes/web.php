<?php

/*
 *	Routes take a url input, and return something something else.
 *	This could be a file, or even a string.
 */

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

// Main
Route::view('/', 'home');
Route::view('/about', 'about');
Route::view('/contact', 'contact');
Route::resource('jobs', JobController::class);

// Auth
Route::get('/register', [RegisterUserController::class, 'create']);
Route::post('/register', [RegisterUserController::class, 'store']);

Route::get('/login', [SessionController::class, 'create']);
Route::post('/login', [SessionController::class, 'store']);