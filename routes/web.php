<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PlatController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\ImageController;


Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);

Route::get('/search', [PlatController::class, 'search'])->name('search');

Route::get('/selecteur', [PlatController::class, 'selecteur']);

Route::middleware('auth')->group(function () {
    Route::resource('plats', PlatController::class)->except(['index', 'show']);
});

Route::resource('plats', PlatController::class)->only(['index', 'show']);
Route::get('/get_ingredient_image/{id}', [ImageController::class, 'get_ingredient_image']);


// Routes pour le tableau de bord en tant qu'administrateur
Route::get('/dashboard', function () {
    return view('index');
})->middleware(['auth', 'verified'])->name('dashboard');

// Routes pour le profil utilisateur
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Routes pour créer un administrateur
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
    Route::post('/register', [RegisteredUserController::class, 'store']);
});

// Inclusion des routes d'authentification
require __DIR__.'/auth.php';
