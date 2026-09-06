<?php

use App\Http\Controllers\AchievementController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');

Route::prefix('about')->name('about.')->group(function () {
    Route::get('/facilities', [PageController::class, 'facilities'])->name('facilities');
    Route::get('/laboratories', [PageController::class, 'laboratories'])->name('laboratories');
    Route::get('/innovations', [PageController::class, 'innovations'])->name('innovations');
});

Route::prefix('programs')->name('programs.')->group(function () {
    Route::get('/academic', [PageController::class, 'academicTrack'])->name('academic');
    Route::get('/tech-pro', [PageController::class, 'techProTrack'])->name('techpro');
});

Route::get('/faculty', [PageController::class, 'faculty'])->name('faculty');
Route::get('/achievements', [AchievementController::class, 'index'])->name('achievements');
Route::get('/news', [PageController::class, 'news'])->name('news');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
