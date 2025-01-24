@include('begin')

<section id="crud" class="flex justify-center ptheader">
    <form class="bg-main-750 w-3/5 lmcborder flex flex-col rounded-xl items-center overflow-hidden mt-8 mb-20 shadow-xl" action="{{route('plats.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="bg-main-700 w-full text-center py-6">
            <h1 class="text-4xl font-semibold amiri">Créer un plat</h1>
            <input class="text-3xl" type="text" id="nom" name="nom" placeholder="Ex : Pizza saumon" required>
        </div>
        <div class="w-full mx-auto overflow-hidden shadow-lg imgplat">
            <div class="ml-5 m-2 flex justify-center">
                <div class="pr-3" style="border-right:solid 2px #978e89;">
                    <span>Sélectionnez un fichier en local :</span>
                    <label for="image">
                        <input type="file" id="image" name="image">
                    </label>
                </div>
                <div class="ml-3">
                    <span>Ou via une url :</span>
                    <input type="text" name="image_web" id="image" placeholder="Url de l'image">
                </div>
            </div>
        </div>
        <div class="w-3/4 py-16 flex flex-col space-between">

            <div id="description" class="w-full">
                <div class="flex flex-row gap-8 justify-between w-full mb-4">
                    <h4 class="text-3xl font-semibold mb-4 flex items-center">
                        <img src="{{ asset('images/icon_text.png') }}" class="w-9 h-9 mr-4" alt="">
                        Description
                    </h4>
                    <hr class="mr-6 mt-6 w-8/12">
                </div>
                <input class="text-lg w-full" type="text" id="description" name="description" placeholder="Ex : pizza avec du saumon" required>
            </div>

            <div id="ingredients" class="w-full mt-20 mb-6">
                <div class="flex flex-row gap-8 justify-between w-full mb-5">
                    <h4 class="text-3xl font-semibold mb-4 flex items-center">
                        <img src="{{ asset('images/icon_ingredients.png') }}" class="w-9 h-9 mr-4" alt="">
                        Ingrédients
                    </h4>
                    <hr class="mr-6 mt-6 w-8/12">
                </div>
                <div id="list_ingredients" class="ingredients grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-4 w-11/12">
                    <div class="ingredients max-w-7xl lmcborder flex flex-col rounded-xl items-center overflow-hidden shadow-xl">
                        <div class="bg-main-650 flex flex-row gap-1 items-center w-full py-3 px-4">
                            <select class="text-2xl font-semibold amiri w-full" name="ingredient[]" onchange="updateIngredientImage(this)">
                                @foreach($ingredients as $ingredient)
                                    <option value="{{$ingredient->id}}">{{$ingredient->nom}}</option>
                                @endforeach
                            </select>
                        </div><div class="image_ingredient">
                            <img src="https://www.bioalaune.com/img/article/10280-saumon.jpg" class="w-full h-40 object-cover"></div>
                    </div>
                </div>
                <button id="add_ingredient" type="button" class="inputmain text-white py-2 px-5 mt-5 rounded-lg">Ajouter un ingrédient</button><br>
            </div>

            <div id="preparation" class="w-full mt-20 mb-12">
                <div class="flex flex-row gap-8 justify-between w-full mb-5">
                    <h4 class="text-3xl font-semibold mb-4 flex items-center">
                        <img src="{{ asset('images/icon_preparation.png') }}" class="w-9 h-9 mr-4" alt="">
                        Préparation
                    </h4>
                    <hr class="mr-6 mt-6 w-8/12">
                </div>
                <ul class="text-xl list-none" id="preparation">
                    <li class="mb-4">
                        <p class="name text-main-grey alata my-2">— ÉTAPE 1 :</p>
                        <input class="text-lg w-full" type="text" name="preparation[0]" required>
                    </li>
                </ul>
                <button id="add_preparation" type="button" class="inputmain text-white py-2 px-5 rounded-lg">Ajouter une étape à la préparation</button><br>
            </div>

            <input type="submit" value="Envoyer en cuisine" class="inputmain text-white py-3 px-5 mt-4 rounded-lg">
        </div>
    </form>
</section>

<script src="{{ asset('js/crud.js') }}"></script>

@include('footer')
