<?php

use App\Http\Controllers\AchievementController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');

Route::prefix('about')->name('about.')->group(function () {
    Route::get('/facilities-laboratories', [PageController::class, 'facilitiesLaboratories'])->name('facilities-laboratories');
    Route::get('/innovations', [PageController::class, 'innovations'])->name('innovations');
    Route::view('/performance-indicators', 'performance-indicators')->name('performance');
});

Route::prefix('programs')->name('programs.')->group(function () {
    Route::get('/academic', [PageController::class, 'academicTrack'])->name('academic');
    Route::get('/tech-pro', [PageController::class, 'techProTrack'])->name('techpro');
});

Route::get('/achievements', [AchievementController::class, 'index'])->name('achievements');
Route::get('/news', [PageController::class, 'news'])->name('news');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::view('/als-shs', 'als')->name('als');
Route::view('/enroll', 'enroll')->name('enroll');

Route::get('/login', [LoginController::class, 'show'])->name('login');