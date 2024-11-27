<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\PlatController;

//Route::get('/', function () {
//    return view('welcome', ['elements' => $elements]);
//});

Route::get('/', [PlatController::class, 'index']);

Route::get('/home', [\App\Http\Controllers\PostController::class, 'index']);

Route::get('/images', [ImageController::class, 'index']);

Route::get('/plats', [PlatController::class, 'index']);
