<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('Home');

Route::get('/contact-us', function () {
    return view('contact');
})->name('contact');

Route::get('/matches', function () {
    return view('matches');
})->name('matches');
