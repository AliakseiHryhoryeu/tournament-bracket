<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\HomeController;

/* HOME page */

Route::get('/', function (){
    return view('home');
})->name('home');

Route::post('/home/addPlayer', [HomeController::class, 'addPlayers'])->name('addPlayer');

Route::post('/home/addDate', [HomeController::class, 'dateValid'])->name('addDate');

/* PLAYERS page */

Route::get('/players', function (){
    return view('players');
})->name('players');


/* TOURNAMENTS page */
Route::get('/tournaments', function (){
    return view('tournaments');
})->name('tournaments');


/* TOURNAMENT page */

Route::get('/tournaments/1', function (){
    return view('tournament');
})->name('tournament');
