<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Ingredient;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function index()
    {

        $images = Image::all();


        return view('home', compact('images'));
    }


    public function get_ingredient_image($id){
        $ingredient = Ingredient::find($id);
        if ($ingredient && $ingredient->image) {
            return response()->json(['imageUrl' => $ingredient->image->url]);
        }
        return response()->json(['imageUrl' => asset('/images/unknownimage.png')]);
    }
}

