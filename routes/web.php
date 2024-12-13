<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/profile', [IndexController::class, 'profile'])->name('profile');

Route::get('/submit', [IndexController::class, 'submit'])->name('submit');
