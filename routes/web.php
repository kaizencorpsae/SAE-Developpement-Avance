<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlatController;

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

