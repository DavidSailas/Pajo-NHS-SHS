<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');

Route::prefix('about')->name('about.')->group(function () {
    Route::get('/facilities', [PageController::class, 'facilities'])->name('facilities');
    Route::get('/laboratories', [PageController::class, 'laboratories'])->name('laboratories');
});

Route::prefix('programs')->name('programs.')->group(function () {
    Route::get('/academic', [PageController::class, 'academicTrack'])->name('academic');
    Route::get('/tech-pro', [PageController::class, 'techProTrack'])->name('techpro');
});

Route::get('/faculty', [PageController::class, 'faculty'])->name('faculty');
Route::get('/achievements', [PageController::class, 'achievements'])->name('achievements');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
