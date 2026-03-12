<?php

use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\TalentController;
use App\Http\Controllers\Frontend\ArtistController;
use App\Http\Controllers\Frontend\PageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Frontend Routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/talents', [TalentController::class, 'index'])->name('talents.index');
Route::get('/talents/{id}', [TalentController::class, 'show'])->name('talents.show');
Route::get('/artists', [ArtistController::class, 'index'])->name('artists.index');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

// Language Switcher Route
Route::get('/lang/{lang}', [\App\Http\Controllers\LanguageController::class, 'switch'])->name('lang.switch');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
