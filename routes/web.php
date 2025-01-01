<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RunnerController;
use App\Http\Controllers\RaceController;
use App\Http\Controllers\HeadToHeadController;
use App\Http\Controllers\SettingsController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EventController;

// Home
Route::get('/', [HomeController::class, 'index'])->name('index');


// Authentication
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register-post', [AuthController::class, 'registerStore'])->name('registerrunner');


// Settings

    // Announcements
    Route::get('/announcement', [SettingsController::class, 'Announcement_Listing'])->name('announcement_listing');

    Route::get('/announcement/Add', [SettingsController::class, 'Announcement_Add'])->name('announcement_add');
    Route::post('/announcement', [SettingsController::class, 'Announcement_Store'])->name('announcement_store');

    Route::get('/announcement/Edit/{id}', [SettingsController::class, 'Announcement_Edit'])->name('announcement_edit');
    Route::put('/announcement', [SettingsController::class, 'Announcement_Update'])->name('announcement_update');

    Route::delete('/announcement/{id}', [SettingsController::class, 'Announcement_Destroy'])->name('announcement_destroy');


    // RaceInfo
    Route::get('/RaceInfo', [SettingsController::class, 'race_Listing'])->name('race_listing');

    Route::get('/RaceInfo/Add', [SettingsController::class, 'race_Add'])->name('race_add');
    Route::post('/RaceInfo', [SettingsController::class, 'race_Store'])->name('race_store');

    Route::get('/RaceInfo/Edit/{id}', [SettingsController::class, 'race_Edit'])->name('race_edit');
    Route::put('/RaceInfo', [SettingsController::class, 'race_update'])->name('race_update');

    Route::delete('/RaceInfo/{id}', [SettingsController::class, 'race_Destroy'])->name('race_destroy');


    // Category
    Route::get('/category', [SettingsController::class, 'category_Listing'])->name('category_listing');

    Route::get('/category/Add', [SettingsController::class, 'category_Add'])->name('category_add');
    Route::post('/category', [SettingsController::class, 'category_Store'])->name('category_store');

    Route::get('/category/Edit/{id}', [SettingsController::class, 'category_Edit'])->name('category_edit');
    Route::put('/category', [SettingsController::class, 'category_update'])->name('category_update');

    Route::delete('/category/{id}', [SettingsController::class, 'category_Destroy'])->name('category_destroy');

    // Users
    Route::get('/users', [SettingsController::class, 'users_Listing'])->name('users_listing');

    Route::get('/users/Add', [SettingsController::class, 'users_Add'])->name('users_add');
    Route::post('/users', [SettingsController::class, 'users_Store'])->name('users_store');

    Route::get('/users/Edit/{id}', [SettingsController::class, 'users_Edit'])->name('users_edit');
    Route::put('/users', [SettingsController::class, 'users_Update'])->name('users_update');

    Route::delete('/users/{id}', [SettingsController::class, 'users_Destroy'])->name('users_destroy');


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


Route::prefix('events')->group(function () {
    Route::get('/', [EventController::class, 'index'])->name('events.list');
    Route::post('/store', [EventController::class, 'store'])->name('events.store');
    Route::get('/edit/{id}', [EventController::class, 'edit'])->name('events.edit');
    Route::post('/update/{id}', [EventController::class, 'update'])->name('events.update');
    Route::delete('/delete/{id}', [EventController::class, 'destroy'])->name('events.destroy');
});
