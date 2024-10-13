<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::resource('users', UserController::class);
Route::get('/home', [HomeController::class, 'index'])->name('home.index');

