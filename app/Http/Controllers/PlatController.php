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
        $plats = Plat::with(['image', 'ingredients'])->paginate(6);
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
                ->paginate(9);
        } else {
            $plats = Plat::with(['image', 'ingredients'])->paginate(9);
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

        // Image
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

        // Préparation
        $preparation = implode("\n", $request->input('preparation'));
        $plat->preparation = $preparation;

        $plat->save();

        // Ingrédients
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

        if(!$plat) {
            return redirect()->route('plats.index')->with('status', 'Le plat est introuvable');
        }

        $plat->delete();

        return redirect()->route('plats.index');
    }

    public function edit($id){
        $plat = Plat::find($id);

        if(!$plat) {
            return redirect()->route('plats.index')->with('status', 'Le plat est introuvable');
        }

        return view('plat.edit', [
            'plat' => $plat,
            'ingredients' => Ingredient::all(),
            'image' => Image::find($plat->image_id),
        ]);
    }

    public function update(Request $request, $id){

        $plat = Plat::find($id);

        $plat->nom = $request->input('nom');
        $plat->description = $request->input('description');

        // Préparation
        $preparation = implode("\n", $request->input('preparation'));
        $plat->preparation = $preparation;


        // Image
        $file = $request->file('image');

        if ($file) {
            $image = new Image();
            $path = $file->store('images/plats', 'public');

            $image->url = Storage::url($path);

            $image->save();

            $id_image = $image->id;
        }else{
            $id_image = $plat->image_id;
        }

        $plat->image_id = $id_image;

        $plat->update();

        // Ingrédients
        $ingredients = $request->input('ingredient');

        $currentIngredients = $plat->ingredients->pluck('id')->toArray();

        $ingredientsToAdd = array_diff($ingredients, $currentIngredients);

        $ingredientsToRemove = array_diff($currentIngredients, $ingredients);

        foreach ($ingredientsToAdd as $ingredient) {
            $plat_ingredient = new Plat_ingredient();
            $plat_ingredient->plat_id = $plat->id;
            $plat_ingredient->ingredient_id = $ingredient;
            $plat_ingredient->save();
        }

        Plat_ingredient::where('plat_id', $plat->id)
            ->whereIn('ingredient_id', $ingredientsToRemove)
            ->delete();


        return redirect()->route('plats.show', $id);
    }

}
