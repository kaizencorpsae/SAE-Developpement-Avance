@include('begin')

<header class="bg-main-750 text-center py-6 pt-28">
    <h1 class="text-3xl font-semibold">Créer un plat</h1>
</header>

<div class="crud">
    <form action="{{route('plats.store')}}" method="post">
         @csrf
        <div id="plat">
            <label for="nom">Nom du plat :</label>
            <input type="text" id="nom" name="nom" placeholder="Ex : pizza saumon" required>
            <br>
            <label for="nom">Description du plat :</label>
            <input type="text" id="description" name="description" placeholder="Ex : pizza avec du saumon" required>
            <br>
            <label for="preparation">Votre préparation:</label>
            <textarea name="preparation" id="preparation"></textarea>
            <br>
        </div>
        <div id="ingredients">
            <label for="Ingrédient">Ingrédient</label>
            <select id="Ingrédient" name="ingredient">
                @foreach($ingredients as $ingredient)
                <option value="{{$ingredient->id}}">{{$ingredient->nom}}</option>
                @endforeach
            </select>
            <label for="ajouter">Ajouter un ingrédient</label>
            <button id="ajouter"></button>
            <!--Ajouter une liste déroulante dynamique avec des tags-->
        </div>
        <input type="submit" value="Envoyer" class="inputmain text-white py-2 px-5 rounded-lg">
    </form>
</div>

@include('footer')
