@include('begin')

<section id="crud" class="flex justify-center ptheader">
    <div class="bg-main-750 w-3/5 lmcborder flex flex-col rounded-xl items-center overflow-hidden mt-8 mb-20 shadow-xl">
        <div class="bg-main-700 w-full text-center py-6">
            <h1 class="text-4xl font-semibold amiri">Créer un plat</h1>
        </div>
        <div class="w-3/4 py-16 flex justify-center">
            <form action="{{route('plats.store')}}" method="post" class="space-y-4" enctype="multipart/form-data">
                @csrf
                <div id="plat" class="space-y-4 flex flex-col">
                    <label for="nom">Nom du plat :</label>
                    <input type="text" id="nom" name="nom" placeholder="Ex : pizza saumon" required>
                    <label for="description">Description du plat :</label>
                    <input type="text" id="description" name="description" placeholder="Ex : pizza avec du saumon" required>
                </div>

                <input type="file" name="image">

                <div class="space-y-4">
                    <div class="ingredients">
                        <p>Ingrédients 1 :</p>
                        <select name="ingredient[]">
                            @foreach($ingredients as $ingredient)
                                <option value="{{$ingredient->id}}">{{$ingredient->nom}}</option>
                            @endforeach

                        </select>
                    </div>
                </div>
                <button id="add_ingredient" type="button" class="inputmain text-white py-2 px-5 rounded-lg">Ajouter un ingrédient</button><br>

                <label for="preparation">Votre préparation:</label>
                <div>
                    <ul class="text-xl list-none" id="preparation">
                        <li>
                            <p class="name text-main-grey alata">Etape 1 :</p>
                            <input type="text" name="preparation[0]" required>
                        </li>
                    </ul>
                    <button id="add_preparation" type="button" class="inputmain text-white py-2 px-5 rounded-lg">Ajouter une étape à la préparation</button><br>
                </div>

                <input type="submit" value="Envoyer" class="inputmain text-white py-2 px-5 rounded-lg">
            </form>
        </div>
    </div>
</section>

<script src="{{ asset('js/crud.js') }}"></script>

@include('footer')
