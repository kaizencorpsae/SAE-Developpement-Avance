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
                    <div id="ingredients1">
                        <p>Ingrédients 1 :</p>
                        <select name="ingredient[]">
                            @foreach($ingredients as $ingredient)
                                <option value="{{$ingredient->id}}">{{$ingredient->nom}}</option>
                            @endforeach

                        </select>
                    </div>

                    <!--Ajouter une liste déroulante dynamique avec des tags-->
                </div>
                <button id="ajouter" type="button" class="inputmain text-white py-2 px-5 rounded-lg">Ajouter un ingrédient</button>
                <br>
                <input type="submit" value="Envoyer" class="inputmain text-white py-2 px-5 rounded-lg">
            </form>
        </div>
    </div>
</section>

<script>
    let count = 1;
    const ajouter = document.getElementById('ajouter');

    ajouter.addEventListener('click', function () {
        // Récupérer l'élément parent des ingrédients
        const ingredientsContainer = document.getElementById('ingredients1').parentElement;

        // Incrémenter le compteur pour le prochain ingrédient
        count++;

        // Créer un conteneur pour le nouvel ingrédient
        const container = document.createElement('div');
        container.id = `ingredients${count}`;

        // Créer un paragraphe pour le libellé
        const p = document.createElement('p');
        p.textContent = `Ingrédients ${count} :`;

        // Créer un élément select
        const s = document.createElement('select');
        s.name = "ingredient[]";

        // Copier les options existantes
        const firstSelect = ingredientsContainer.querySelector('select');
        if (firstSelect) {
            firstSelect.querySelectorAll('option').forEach(option => {
                const newOption = document.createElement('option');
                newOption.value = option.value;
                newOption.textContent = option.textContent;
                s.appendChild(newOption);
            });
        }

        // Créer un bouton de suppression
        const b = document.createElement('button');
        b.type = "button";
        b.style =  "color:red; margin-left : 5px";
        b.textContent = "X";

        // Ajouter l'événement de suppression
        b.addEventListener('click', function () {
            container.remove();
        });

        // Ajouter les éléments au conteneur
        container.appendChild(p);
        container.appendChild(s);
        container.appendChild(b);

        // Ajouter le conteneur au parent
        ingredientsContainer.appendChild(container);
    });
</script>

@include('footer')
