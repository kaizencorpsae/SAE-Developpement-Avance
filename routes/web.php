<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PlatController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);

Route::get('/search', [PlatController::class, 'search'])->name('search');

Route::resource('plats', PlatController::class);
/*
"ressource" permet de créer plusieurs pages pour le CRUD
- index = page de base du produit
- create = page contenant le formulaire pour créer, fait suite à store
- store (method post) = Fonction dans le Controller pour stocker les données
- edit = page contenant le formulaire pour éditer, fait suite à update
- update (method put) = Fonction dans le Controller pour modifier les données
- destroy (method delete) = Fonction dans le Controller pour supprimer les données
- show = page pour afficher des données
*/

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
