<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/profile', [IndexController::class, 'profile'])->name('profile');
Route::get('/register', [IndexController::class, 'register'])->name('register');
Route::get('/race', [IndexController::class, 'race'])->name('race');
Route::get('/runners', [IndexController::class, 'runners'])->name('runners');
