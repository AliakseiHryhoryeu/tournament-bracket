<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function (){
    return view('home');
})->name('home');

Route::get('/players', function (){
    return view('players');
})->name('players');

Route::get('/tournaments', function (){
    return view('tournaments');
})->name('tournaments');

Route::get('/tournaments/1', function (){
    return view('tournament');
})->name('tournament');
