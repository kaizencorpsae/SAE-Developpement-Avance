<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Plat;

class PlatController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function plats()
    {
        $plats = Plat::with('image')->get();

        return view('plats', compact('plats'));
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        if ($query) {
            $plats = Plat::with(['image', 'ingredients'])
                ->where('nom', 'LIKE', "%{$query}%")
                ->orWhere('description', 'LIKE', "%{$query}%")
                ->orWhereHas('ingredients', function ($q) use ($query) {
                    $q->where('nom', 'LIKE', "%{$query}%");
                })
                ->get();
        } else {
            $plats = Plat::with(['image', 'ingredients'])->get();
        }

        return view('search', compact('plats', 'query'));
    }


    public function plat(Request $request)
    {
        $id = $request->query('id');

        if ($id) {
            $plat = Plat::with(['image', 'ingredients'])->find($id);

            if (!$plat) {
                return redirect()->route('plats')->with('error', 'Plat non trouvé.');
            }

            $ingredients = $plat->ingredients;
        } else {
            return redirect()->route('plats');
        }

        return view('plat', compact('plat', 'ingredients'));
    }

}
