<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::view('contact-us', 'contact')->name('contact-us');
Route::view('about-us', 'about')->name('about-us');

// Route::view('/second', 'second');
