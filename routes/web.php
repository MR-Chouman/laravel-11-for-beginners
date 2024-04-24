<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::view('contact-us', 'contact')->name('contact-us');
Route::view('about-us', 'about')->name('about-us');

// Route::view('/second', 'second');
