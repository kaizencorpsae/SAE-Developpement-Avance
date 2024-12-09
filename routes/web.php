<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\PlatController;

//Route::get('/', function () {
//    return view('welcome', ['elements' => $elements]);
//});

Route::get('/', [PlatController::class, 'index']);

//Route::get('/plats', [PlatController::class, 'plats']);
Route::get('/plats', [PlatController::class, 'plats'])->name('plats');

Route::get('/search', [PlatController::class, 'search'])->name('search');

Route::get('/plat', [PlatController::class, 'plat'])->name('plat');

