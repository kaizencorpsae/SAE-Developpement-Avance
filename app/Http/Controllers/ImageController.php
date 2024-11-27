<?php

namespace App\Http\Controllers;

use App\Models\Image;

class ImageController extends Controller
{
    public function index()
    {
        
        $images = Image::all();

        
        return view('home', compact('images'));
    }
}

