<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\SocialLoginController;
use App\Http\Controllers\InspirationController;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AccountSettingsController;
use App\Http\Controllers\IndustriesExplorerController;

use Illuminate\Support\Facades\Route;

use Laravel\Socialite\Facades\Socialite;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/search', function () {
    return view('search');
})->name('search');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/account', [AccountSettingsController::class, 'index'])->middleware(['auth', 'verified'])->name('account');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('auth/{provider}/redirect', [SocialLoginController::class , 'redirect'])->name('auth.socialite.redirect');
Route::get('auth/{provider}/callback', [SocialLoginController::class , 'callback'])->name('auth.socialite.callback');

// Inspiration Exploror Routes
Route::get('/inspiration_explorer', [InspirationController::class, 'index'])->middleware(['auth', 'verified'])->name('inspiration_explorer.index');

// Inspiration explorer form save
Route::post('/inspiration_explorer/save', [InspirationController::class, 'save'])->middleware(['auth', 'verified'])->name('inspiration_explorer.save');

// Magazine Routes
Route::get('/magazine', function () {
    return view('magazine.index');
})->name('magazine.index');

// Industry
Route::get('/industry_explorer', [IndustriesExplorerController::class, 'index'])->middleware(['auth', 'verified'])->name('industry.index');

// Socialite routes
Route::get('/auth/redirect/google', function () {
    return Socialite::driver('google')->redirect();
})->name('socialite.google.redirect');

Route::get('/auth/redirect/facebook', function () {
    return Socialite::driver('facebook')->redirect();
})->name('socialite.facebook.redirect');

require __DIR__.'/auth.php';
