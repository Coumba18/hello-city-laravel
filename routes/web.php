<?php

use Illuminate\Support\Facades\Route;

// FAIRE ça

// Route::get('/', function() {
//     return view('pages/home');
// })->name('home');

// Route::get('/about-us', function() {
//     return view('pages/about');
// })->name('about');

// OU ça

// Route::get('/', fn() => view('pages/home'))->name('home');

// Route::get('/about-us', fn() => view('pages/about'))->name('about');

// OU ENCORE ça

Route::view('/', 'pages/home')->name('home');

Route::view('/about-us', 'pages/about')->name('about');


