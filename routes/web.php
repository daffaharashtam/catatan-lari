<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RunnerController;
use App\Http\Controllers\RaceController;
use App\Http\Controllers\HeadToHeadController;
use Illuminate\Support\Facades\Route;

// Home
Route::get('/', [HomeController::class, 'index'])->name('index');

// Register
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register.form');
Route::post('/register', [AuthController::class, 'register'])->name('register.submit');

// Profile
Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');

// Profile Other
Route::get('/profile/{id}', [ProfileController::class, 'viewOther'])->name('profile.other');

// Search Race
Route::get('/races/search', [RaceController::class, 'search'])->name('races.search');
Route::get('/races/show', [RaceController::class, 'show'])->name('races.show');

// Submit Suggestion Race
Route::get('/races/suggest', [RaceController::class, 'showSuggestionForm'])->name('races.suggest.form');
Route::post('/races/suggest', [RaceController::class, 'submitSuggestion'])->name('races.suggest.submit');

// Search Runners
Route::get('/runners/search', [RunnerController::class, 'search'])->name('runners.search');
Route::get('/runners/show', [RunnerController::class, 'show'])->name('runners.show');

// Head to Head
Route::get('/head-to-head', [HeadToHeadController::class, 'show'])->name('headtohead.show');
Route::post('/head-to-head', [HeadToHeadController::class, 'compare'])->name('headtohead.compare');

