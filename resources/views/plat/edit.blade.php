@include('begin')

<section id="crud" class="flex justify-center ptheader">
    <form class="bg-main-750 w-3/5 lmcborder flex flex-col rounded-xl items-center overflow-hidden mt-8 mb-20 shadow-xl" action="{{route('plats.update', $plat->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="bg-main-700 w-full text-center py-6">
            <input class="text-4xl font-semibold amiri text-center" type="text" id="nom" name="nom" value="{{$plat->nom}}" required>
        </div>
        <div class="w-full mx-auto overflow-hidden shadow-lg imgplat">

            @if(str_contains($image->url, '/storage/public/images'))
                <img src="{{ asset($image->url) }}" class="w-full h-80 object-cover" alt="Image">
            @else
                <img src="{{ $image->url }}" class="w-full h-80 object-cover" alt="Image">
            @endif

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
                    <input type="hidden" name="image_id" value="{{$image->id}}">
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
                <input class="text-lg w-full" type="text" id="description" name="description" value="{{$plat->description}}" required>
            </div>
            <div id="ingredients" class="w-full mt-20 mb-6">
                <div class="flex flex-row gap-8 justify-between w-full mb-5">
                    <h4 class="text-3xl font-semibold mb-4 flex items-center">
                        <img src="{{ asset('images/icon_ingredients.png') }}" class="w-9 h-9 mr-4" alt="">
                        Ingrédients
                    </h4>
                    <hr class="mr-6 mt-6 w-8/12">
                </div>
                <div id="list_ingredients" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-4 w-11/12">
                    @foreach($plat->ingredients as $key => $ingredient_plat)
                        <div class="ingredients max-w-7xl lmcborder flex flex-col rounded-xl items-center overflow-hidden shadow-xl">
                            <div class="bg-main-650 flex flex-row gap-1 items-center w-full py-3 px-4">
                                <select class="text-2xl font-semibold amiri w-full" name="ingredient[]" onchange="updateIngredientImage(this)">
                                    @foreach($ingredients as $ingredient)
                                        <option value="{{ $ingredient->id }}"
                                            {{ $ingredient->id == $ingredient_plat->id ? 'selected' : '' }}>
                                            {{ $ingredient->nom }}
                                        </option>
                                    @endforeach
                                </select>
                                @if($key != 0)
                                    <button class="remove text-3xl" type="button" style="color:#ff876c; margin-left : 5px">×</button>
                                @endif
                            </div>
                            <div class="image_ingredient">
                                @if($ingredient_plat->image)
                                    <img
                                        src="{{ $ingredient_plat->image->url }}"
                                        class="w-full h-36 object-cover"
                                        alt=" ">
                                @else
                                    <img src="{{ asset('/images/unknownimage.png') }}" class="w-full h-40 object-cover rounded-3xl mb-4" alt="">
                                @endif
                            </div>
                        </div>
                    @endforeach

                </div><button id="add_ingredient" type="button" class="inputmain text-white py-2 px-5 mt-5 rounded-lg">Ajouter un ingrédient</button><br>
            </div>

            <div id="preparation" class="w-full mt-20 mb-12">
                <div class="flex flex-row gap-8 justify-between w-full mb-5">
                    <h4 class="text-3xl font-semibold mb-4 flex items-center">
                        <img src="{{ asset('images/icon_preparation.png') }}" class="w-9 h-9 mr-4" alt="">
                        Préparation
                    </h4>
                    <hr class="mr-6 mt-6 w-8/12">
                </div>
                <ul class="text-xl list-none">
                    @foreach (explode("\n", $plat->preparation) as $index => $step)
                        @if (trim($step) !== '')
                            <li class="mb-4">
                                <p class="name text-main-grey alata my-2">— ÉTAPE {{$index+1}} :</p>
                                <div class="flex gap-2">
                                    <input class="text-lg w-full" type="text" name="preparation[{{$index}}]" value="{{ trim($step) }}">
                                    @if($index != 0)
                                        <button class="remove text-3xl" type="button" style="color:#ff876c; margin-left : 5px">×</button>
                                    @endif
                                </div>
                            </li>
                        @endif

                    @endforeach
                </ul>
                <button id="add_preparation" type="button" class="inputmain text-white py-2 px-5 mt-2 rounded-lg">Ajouter une étape à la préparation</button><br>
            </div>

            <input type="hidden" name="image_id" value="{{$plat->image_id}}">
            <input type="submit" value="Appliquer les modifications" class="inputmain text-white py-3 px-5 mt-4 rounded-lg">

        </div>

    </form>
</section>

<script src="{{ asset('js/crud.js') }}"></script>

@include('footer')
