<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlatController;
use App\Http\Controllers\AdminController;

Route::get('/', [HomeController::class, 'index']);

//Route::get('/plats', [PlatController::class, 'plats'])->name('plats');

Route::get('/search', [PlatController::class, 'search'])->name('search');
  
Route::get('/plat', [PlatController::class, 'plat'])->name('plat');

Route::get('/login', [AdminController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AdminController::class, 'login']);
//Route::post('/logout', [AdminController::class, 'logout'])->name('logout');


/*
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'login'])->name('login');
});


//Route::resource('plats', PlatController::class)->except(['show']);
=======

//Route::get('/plat', [PlatController::class, 'plat'])->name('plat');

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


