<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Plat;
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
        return view('plat.create');
    }

    public function store(Request $request){

        $plat = new Plat();

        $plat->nom = $request->input('nom');
        $plat->description = $request->input('description');
        $plat->image_id = 1;

        $preparation = $request->input('preparation');
        if(!isEmpty($preparation)) {
            $plat->preparation = $preparation;
        }

        $plat->save();

        return redirect()->route('plats.index');
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
        $plat->image_id = 1;

        $plat->update();

        return redirect()->route('plats.index');
    }

}
