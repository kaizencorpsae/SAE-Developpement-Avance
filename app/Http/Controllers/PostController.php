<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class PostController extends Controller
{
    public function index(){

        $images = Image::all();
        return view('images.index', compact('images'));
        
    }
    
//    public function show($id){
//        dd($id);
//    }
}
