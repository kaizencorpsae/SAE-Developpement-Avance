<?php

namespace App\Http\Controllers;
use App\Models\Image;
use App\Models\Ingredient;
use App\Models\Plat_Ingredient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Plat;
use Illuminate\Support\Facades\Storage;
use function PHPUnit\Framework\isEmpty;

class PlatController extends Controller
{
    public function index()
    {
        $plats = Plat::with(['image', 'ingredients'])->get();
        foreach ($plats as $plat) {
            $plat->ingredients = $plat->ingredients;
            $plat->preparation = $plat->preparation;
        }
        return view('plats', compact('plats'));
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        if ($query) {
            $plats = Plat::with(['image', 'ingredients'])
                ->where('nom', 'LIKE', "%{$query}%")
                ->orWhereHas('ingredients', function ($q) use ($query) {
                    $q->where('nom', 'LIKE', "%{$query}%");
                })
                ->get();
        } else {
            $plats = Plat::with(['image', 'ingredients'])->get();
        }

        return view('search', compact('plats', 'query'));
    }


    public function show($id)
    {
        /**
         * Affiche les détails d'un plat spécifique :
         * - Charge le plat avec son image et ses ingrédients via son ID.
         * - Redirige vers la liste des plats si l'ID est absent ou invalide.
         * - Retourne une vue avec les détails du plat et ses ingrédients.
         */

        $plat = Plat::with(['image', 'ingredients'])->find($id);

        if(!$plat) {
            return redirect()->route('plats.index');
        }

        return view('plat', compact('plat'));
    }

    //Exemples dans le Controller :
    public function create(){
        return view('plat.create', ['ingredients' => Ingredient::all()]);
    }

    public function store(Request $request){

        $image = new Image();

        $file = $request->file('image');

        $id_image = 1;
        if ($file) {
            $path = $file->store('images/plats', 'public');

            $image->url = Storage::url($path);

            $image->save();

            $id_image = $image->id;
        }


        $plat = new Plat();

        $plat->nom = $request->input('nom');
        $plat->description = $request->input('description');
        $plat->image_id = $id_image;

        $preparation = $request->input('preparation');
        $plat->preparation = $preparation ?? '"Pas de préparation"';

        $plat->save();

        $ingredients = $request->input('ingredient');
        foreach ($ingredients as $ingredient) {
            $plat_ingredient = new Plat_ingredient();

            $plat_ingredient->plat_id = $plat->id;
            $plat_ingredient->ingredient_id = $ingredient;

            $plat_ingredient->save();
        }

        return redirect()->route('plats.show', $plat->id);
    }

    public function destroy($id){
        $plat = Plat::find($id);

        $plat->delete();

        return redirect()->route('plats.index');
    }

    public function edit($id){
        return view('plat.edit', [
            'plat' => Plat::find($id)
        ]);
    }

    public function update(Request $request, $id){

        $plat = Plat::find($id);

        $plat->nom = $request->input('nom');
        $plat->description = $request->input('description');

        $plat->image_id = $request->input('image_id');

        $preparation = implode("\n", $request->input('preparation'));
        $plat->preparation = $preparation;

        $plat->update();

        return redirect()->route('plats.show', $id);
    }

}
