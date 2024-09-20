<?php

/*
 *	Routes take a url input, and return something something else.
 *	This could be a file, or even a string.
 */
use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

// Main
Route::view('/', 'home');
Route::view('/about', 'about');
Route::view('/contact', 'contact');
Route::resource('jobs', JobController::class);
