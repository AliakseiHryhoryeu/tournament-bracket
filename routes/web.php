<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\HomeController;
use \App\Http\Controllers\TournamentController;
use \App\Http\Controllers\PlayersController;

/* HOME page */

Route::get('/', [HomeController::class, 'getAllPlayers'])->name('home');

/* PLAYERS pages */

Route::get('/players', [PlayersController::class, 'getAllPlayers'])->name('players');

Route::post('/players/addPlayer', [PlayersController::class, 'addPlayer'])->name('addPlayer');

Route::get('/players/{id}', [PlayersController::class, 'getPlayer'])->name('playerInfo');

Route::post('/players/{id}', [PlayersController::class, 'editPlayer'])->name('editPlayer');

/* TOURNAMENTS pages */

Route::get('/tournaments', [TournamentController::class, 'getAllTournaments'])->name('tournaments');

Route::post('/tournaments/addTournament', [TournamentController::class, 'addTournament'])->name('addTournament');

Route::get('/tournaments/{id}', [TournamentController::class, 'getTournament'])->name('tournamentInfo');

Route::post('/tournaments/{id}', [TournamentController::class, 'editTournament'])->name('editTournament');
