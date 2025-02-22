<?php

use App\Http\Controllers\CoachController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LeagueController;
use App\Http\Controllers\OfficialController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', DashboardController::class)->name('Dashboard');

    Route::controller(OfficialController::class)->prefix('officials')->group(function () {
        Route::get('/', 'index')->name('officials.index');
        // Route::get('/{official_uuid}', 'show')->name('officials.show');
        Route::get('/create', 'create')->name('officials.create');
        Route::post('/store', 'store')->name('officials.store');
        Route::get('/edit/{official_uuid}', 'edit')->name('officials.edit');
        Route::put('/update/{official_uuid}', 'update')->name('officials.update');
        Route::get('/delete/{official_uuid}', 'destroy')->name('officials.destroy');
    });

    Route::controller(LeagueController::class)->prefix('leagues')->group(function () {
        Route::get('/', 'index')->name('leagues.index');
        // Route::get('/{league_uuid}', 'show')->name('leagues.show');
        Route::get('/create', 'create')->name('leagues.create');
        Route::post('/store', 'store')->name('leagues.store');
        Route::get('/edit/{league_uuid}', 'edit')->name('leagues.edit');
        Route::put('/update/{league_uuid}', 'update')->name('leagues.update');
        Route::get('/delete/{league_uuid}', 'destroy')->name('leagues.destroy');
    });

    Route::controller(TeamController::class)->prefix('teams')->group(function () {
        Route::get('/', 'index')->name('teams.index');
        // Route::get('/{team_uuid}', 'show')->name('teams.show');
        Route::get('/create', 'create')->name('teams.create');
        Route::post('/store', 'store')->name('teams.store');
        Route::get('/edit/{team_uuid}', 'edit')->name('teams.edit');
        Route::put('/update/{team_uuid}', 'update')->name('teams.update');
        Route::get('/delete/{team_uuid}', 'destroy')->name('teams.destroy');
    });

    Route::controller(CoachController::class)->prefix('coaches')->group(function () {
        Route::get('/', 'index')->name('coaches.index');
        // Route::get('/{coach_uuid}', 'show')->name('coaches.show');
        Route::get('/create', 'create')->name('coaches.create');
        Route::post('/store', 'store')->name('coaches.store');
        Route::get('/edit/{coach_uuid}', 'edit')->name('coaches.edit');
        Route::put('/update/{coach_uuid}', 'update')->name('coaches.update');
        Route::get('/delete/{coach_uuid}', 'destroy')->name('coaches.destroy');
    });

    Route::controller(PlayerController::class)->prefix('players')->group(function () {
        Route::get('/', 'index')->name('players.index');
        // Route::get('/{player_uuid}', 'show')->name('players.show');
        Route::get('/create', 'create')->name('players.create');
        Route::post('/store', 'store')->name('players.store');
        Route::get('/edit/{player_uuid}', 'edit')->name('players.edit');
        Route::put('/update/{player_uuid}', 'update')->name('players.update');
        Route::get('/delete/{player_uuid}', 'destroy')->name('players.destroy');
    });
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
