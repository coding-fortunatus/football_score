<?php

use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.index');
    })->name('Dashboard');
});

Route::get('/', function () {
    return view('index');
})->name('Home');

Route::get('/contact-us', function () {
    return view('contact');
})->name('contact');

Route::get('/matches', function () {
    return view('matches');
})->name('matches');

Route::get('/match-details', function () {
    return view('matches-details');
})->name('match-details');

Route::get('/clubs', function () {
    return view('about');
})->name('clubs');

Route::get('/schedule', function () {
    return view('schedule');
})->name('schedule');

Route::get('/players', function () {
    return view('players');
})->name('players');

Route::get('/player-details', function () {
    return view('players-details');
})->name('player-details');

Route::get('/news', function () {
    return view('news');
})->name('news');

Route::get('/news-details', function () {
    return view('newss-details');
})->name('news-details');

Route::get('/media', function () {
    return view('media');
})->name('media');
