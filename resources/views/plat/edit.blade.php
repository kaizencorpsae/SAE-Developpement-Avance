@include('begin')

<section id="crud" class="flex justify-center ptheader">
    <div class="bg-main-750 w-3/5 lmcborder flex flex-col rounded-xl items-center overflow-hidden mt-8 mb-20 shadow-xl">
        <div class="bg-main-700 w-full text-center py-6">
            <h1 class="text-4xl font-semibold amiri">Modifier le plat {{$plat->nom}}</h1>
        </div>
        <div class="w-3/4 py-16 flex justify-center">
            <form action="{{route('plats.update', $plat->id)}}" method="post" class="space-y-4" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div id="plat" class="space-y-4 flex flex-col">
                    <label for="nom">Nom du plat :</label>
                    <input type="text" id="nom" name="nom" value="{{$plat->nom}}" required>
                    <label for="description">Description du plat :</label>
                    <input type="text" id="description" name="description" value="{{$plat->description}}" required>
                </div>

                <p>Modifier l'image :</p>

                @if(str_contains($image->url, '/storage/public/images'))
                    <img src="{{ asset($image->url) }}" alt="Image">
                @else
                    <img src="{{ $image->url }}" alt="Image">
                @endif


                <input type="file" name="image">
                <input type="hidden" name="image_id" value="{{$image->id}}">

                <div class="space-y-4">
                    @foreach($plat->ingredients as $key => $ingredient_plat)
                    <div class="ingredients">
                        <p>Ingrédients {{$key+1}} :</p>
                        <select name="ingredient[]">
                            @foreach($ingredients as $ingredient)
                                <option value="{{ $ingredient->id }}"
                                    {{ $ingredient->id == $ingredient_plat->id ? 'selected' : '' }}>
                                    {{ $ingredient->nom }}
                                </option>
                            @endforeach
                        </select>
                        @if($key != 0)
                            <button class="remove" type="button" style="color:red; margin-left : 5px">X</button>
                        @endif
                    </div>
                    @endforeach
                </div>
                <button id="add_ingredient" type="button" class="inputmain text-white py-2 px-5 rounded-lg">Ajouter un ingrédient</button><br>

                <label for="preparation">Votre préparation:</label>
                <div>
                    <ul class="text-xl list-none" id="preparation">
                        @foreach (explode("\n", $plat->preparation) as $index => $step)
                            @if (trim($step) !== '') <!-- Ignorer les lignes vides -->
                            <li>
                                <p class="name text-main-grey alata">Etape {{$index+1}}:</p>
                                <input type="text" name="preparation[{{$index}}]" value="{{ trim($step) }}">
                                @if($index != 0)
                                    <button class="remove" type="button" style="color:red; margin-left : 5px">X</button>
                                @endif
                            </li>
                            @endif

                        @endforeach
                    </ul>
                    <button id="add_preparation" type="button" class="inputmain text-white py-2 px-5 rounded-lg">Ajouter une étape à la préparation</button><br>
                </div>

                <input type="hidden" name="image_id" value="{{$plat->image_id}}">
                <input type="submit" value="Modifier" class="inputmain text-white py-2 px-5 rounded-lg">
            </form>
        </div>
    </div>
</section>

<script src="{{ asset('js/crud.js') }}"></script>

@include('footer')
