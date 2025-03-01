<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\CoachController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FieldController;
use App\Http\Controllers\FootballMatchController;
use App\Http\Controllers\GoalScorerController;
use App\Http\Controllers\LeagueController;
use App\Http\Controllers\OfficialController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\ScheduleController;
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

    Route::controller(FieldController::class)->prefix('fields')->group(function () {
        Route::get('/', 'index')->name('fields.index');
        // Route::get('/{field_uuid}', 'show')->name('fields.show');
        Route::get('/create', 'create')->name('fields.create');
        Route::post('/store', 'store')->name('fields.store');
        Route::get('/edit/{field_uuid}', 'edit')->name('fields.edit');
        Route::put('/update/{field_uuid}', 'update')->name('fields.update');
        Route::get('/delete/{field_uuid}', 'destroy')->name('fields.destroy');
    });

    Route::controller(ScheduleController::class)->prefix('schedules')->group(function () {
        Route::get('/', 'index')->name('schedules.index');
        // Route::get('/{schedule_uuid}', 'show')->name('schedules.show');
        Route::get('/create', 'create')->name('schedules.create');
        Route::post('/store', 'store')->name('schedules.store');
        Route::get('/edit/{schedule_uuid}', 'edit')->name('schedules.edit');
        Route::patch('/update/{schedule_uuid}', 'update')->name('schedules.update');
        Route::get('/delete/{schedule_uuid}', 'destroy')->name('schedules.destroy');
    });

    Route::controller(FootballMatchController::class)->prefix('matches')->group(function () {
        Route::get('/', 'index')->name('matches.index');
        // Route::get('/{match_uuid}', 'show')->name('matches.show');
        Route::get('/create', 'create')->name('matches.create');
        Route::post('/store', 'store')->name('matches.store');
        Route::get('/edit/{match_uuid}', 'edit')->name('matches.edit');
        Route::patch('/update/{match_uuid}', 'update')->name('matches.update');
        Route::get('/delete/{match_uuid}', 'destroy')->name('matches.destroy');
    });

    Route::controller(GoalScorerController::class)->prefix('goal-scorers')->group(function () {
        Route::get('/', 'index')->name('scorers.index');
        // Route::get('/{id}', 'show')->name('scorers.show');
        Route::get('/create', 'create')->name('scorers.create');
        Route::post('/store', 'store')->name('scorers.store');
        Route::get('/edit/{id}', 'edit')->name('scorers.edit');
        Route::patch('/update/{id}', 'update')->name('scorers.update');
        Route::get('/delete/{id}', 'destroy')->name('scorers.destroy');
    });
});

Route::controller(ClientController::class)->group(function () {
    Route::get('/', 'index')->name('client.index');
    Route::get('/teams', 'teams')->name('client.teams');
    // Route::get('/team/{team_uuid}', 'team')->name('client.team');
    Route::get('/players', 'players')->name('client.players');
    Route::get('/schedules', 'schedules')->name('client.schedules');
    Route::get('/matches', 'matches')->name('client.matches');
});
