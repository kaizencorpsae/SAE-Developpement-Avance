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
                    <label for="nom">Description du plat :</label>
                    <input type="text" id="description" name="description" placeholder="Ex : pizza avec du saumon" required>
                    <label for="preparation">Votre préparation:</label>
                    <textarea name="preparation" id="preparation"></textarea>
                </div>

                <input type="file" name="image">

                <div class="space-y-4">
                    <div id="ingredients">
                        <p>Ingrédients 1 :</p>
                        <select name="ingredient[]">
                            @foreach($ingredients as $ingredient)
                                <option value="{{$ingredient->id}}">{{$ingredient->nom}}</option>
                            @endforeach
                        </select>
                    </div>
                    <button id="ajouter" type="button" class="inputmain text-white py-2 px-5 rounded-lg">Ajouter un ingrédient</button>
                    <!--Ajouter une liste déroulante dynamique avec des tags-->
                </div>
                <input type="submit" value="Envoyer" class="inputmain text-white py-2 px-5 rounded-lg">
            </form>
        </div>
    </div>
</section>

<script>
    let count = 1
    const ajouter = document.getElementById('ajouter')
    ajouter.addEventListener('click', function () {
        // Récupérer le conteneur des ingrédients
        const ingredients = document.getElementById('ingredients');

        // Créer un nouveau paragraphe et un nouvel élément <select>
        count++;
        const p = document.createElement('p');
        p.textContent = 'Ingrédients '+count + ' :';

        const s = document.createElement('select');
        s.name = "ingredient[]";

        // Copier les options existantes
        const firstSelect = ingredients.querySelector('select');
        if (firstSelect) {
            firstSelect.querySelectorAll('option').forEach(option => {
                const newOption = document.createElement('option');
                newOption.value = option.value;
                newOption.textContent = option.textContent;
                s.appendChild(newOption);
            });
        }

        // Ajouter le paragraphe et le select au conteneur
        ingredients.appendChild(p);
        ingredients.appendChild(s);
    })
</script>

@include('footer')
