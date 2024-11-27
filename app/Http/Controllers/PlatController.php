<?php

namespace App\Http\Controllers;

use App\Models\Plat;

class PlatController extends Controller
{
    public function index()
    {
        // Récupérer tous les plats avec l'image associée
        $plats = Plat::with('image')->get();

        // Retourner la vue avec les plats
        return view('plats', compact('plats'));
    }
}
