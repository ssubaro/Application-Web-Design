<?php

use App\Http\Controllers\MovieController;
use App\Http\Controllers\CharacterController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MovieController::class, 'index'])->name('home');
Route::resource('movies', MovieController::class);
Route::resource('characters', CharacterController::class);
