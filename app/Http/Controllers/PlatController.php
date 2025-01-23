<?php

namespace App\Http\Controllers;
use App\Models\Image;
use App\Models\Ingredient;
use App\Models\Plat_Ingredient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Plat;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\View;
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

        return view('search', compact('query'));
    }

    public function selecteur(Request $request){
        $query = $request->input('query');

        $plats = $this->getPlats($query);

        $platsHtml = $plats->map(function($plat) {
            return $this->html_plat($plat);
        });

        $json = [
            'plats' => $platsHtml
        ];

        return response()->json($json);
    }

    public function getPlats($query)
    {
        return Plat::with(['image', 'ingredients'])
            ->where('nom', 'LIKE', "%{$query}%")
            ->orWhereHas('ingredients', function ($q) use ($query) {
                $q->where('nom', 'LIKE', "%{$query}%");
            })->take(30)->get();
    }

    public function html_plat($plat)
    {
        return '
    <div class="bg-main-600 p-6 rounded-lg shadow-lg">
        <a class="platehover" href="' . route('plats.show', $plat->id) . '">
            <h2 class="text-2xl font-bold mb-2">' . $plat->nom . '</h2>
            <p class="text-grey-600 mb-4">' . $plat->description . '</p>
            ' . ($plat->image ?
                '<img src="' . $plat->image->url . '" alt="' . $plat->nom . '" class="w-full h-64 object-cover rounded-lg mb-4">' :
                '<p class="text-grey-600">Aucune image disponible</p>') . '
        </a>
        <!-- Boutons modifier et supprimer -->
        ' . (auth()->user() && auth()->user()->is_admin ? '
            <div class="flex justify-center space-x-4 mt-4">
                <a href="' . route('plats.edit', $plat->id) . '" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-700">Modifier</a>
                <form action="' . route('plats.destroy', $plat->id) . '" method="post" class="inline">
                    ' . csrf_field() . '
                    ' . method_field("delete") . '
                    <input type="submit" value="Supprimer" class="px-4 py-2 bg-red-400 text-white rounded hover:bg-red-600 cursor-pointer">
                </form>
            </div>
        ' : '') . '
    </div>';
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
    public function create()
    {
        // Vérifie si l'utilisateur est admin
        if (!auth()->user()->is_admin) {
            return redirect()->route('plats.index')->with('error', 'Accès refusé : vous n\'êtes pas autorisé.');
        }

        return view('plat.create', ['ingredients' => Ingredient::all()]);
    }

    public function store(Request $request){

        // Vérifie si l'utilisateur est admin
        if (!auth()->user()->is_admin) {
            return redirect()->route('plats.index')->with('error', 'Accès refusé : vous n\'êtes pas autorisé.');
        }

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

        // Vérifie si l'utilisateur est admin
        if (!auth()->user()->is_admin) {
            return redirect()->route('plats.index')->with('error', 'Accès non autorisé.');
        }
        $plat = Plat::find($id);

        if(!$plat) {
            return redirect()->route('plats.index')->with('status', 'Le plat est introuvable');
        }

        $plat->delete();

        return redirect()->route('plats.index');
    }

    public function edit($id){

        // Vérifie si l'utilisateur est admin
        if (!auth()->user()->is_admin) {
            return redirect()->route('plats.index')->with('error', 'Accès non autorisé.');
        }
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

        // Vérifie si l'utilisateur est admin
        if (!auth()->user()->is_admin) {
            return redirect()->route('plats.index')->with('error', 'Accès non autorisé.');
        }

        $plat = Plat::find($id);

        $plat->nom = $request->input('nom');
        $plat->description = $request->input('description');

        // Préparation
        $preparation = implode("\n", $request->input('preparation'));
        $plat->preparation = $preparation;


        // Image
        $file = $request->file('image');
        $url = $request->input('image_web');
        if ($file) {
            // Sauvegarder la nouvelle image
            $image = new Image();
            $path = $file->store('images/plats', 'public');
            $image->url = Storage::url($path);
            $id_image = $this->deleteOldImage($image, $plat);
        }
        elseif ($url){
            // Sauvegarder la nouvelle image
            $image = new Image();
            $image->url = $url;
            $id_image = $this->deleteOldImage($image, $plat);
        }
        else {
            $id_image = $plat->image_id;
        }

        $plat->image_id = $id_image;
        $plat->save();

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

    /**
     * @param Image $image
     * @param $plat
     * @return mixed
     */
    public function deleteOldImage(Image $image, $plat): mixed
    {
        $image->save();

        $id_image = $image->id;

        // Mettre à jour le plat avec le nouveau image_id
        $oldImageId = $plat->image_id;
        $plat->image_id = $id_image;
        $plat->save();

        // Supprimer l'ancienne image après avoir mis à jour le plat
        if ($oldImageId) {
            $oldImage = Image::find($oldImageId);
            if ($oldImage) {
                // Supprimer le préfixe /storage/ du chemin de l'image
                $relativePath = str_replace('/storage/', '', $oldImage->url);
                Log::info('Suppression de l\'ancienne image: ' . $relativePath);
                Storage::disk('public')->delete($relativePath);
                $oldImage->delete();
            }
        }
        return $id_image;
    }


}
