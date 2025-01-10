@include('begin')

<header class="bg-main-750 text-center py-6 pt-28">
    <h1 class="text-3xl font-semibold">Créer un plat</h1>
</header>

<div>
    <form action="{{route('plats.store')}}" method="post">
         @csrf
        <label for="nom">Nom du plat :</label>
        <input type="text" id="nom" name="nom" placeholder="Ex : pizza saumon" required>
        <br>
        <label for="nom">Description du plat :</label>
        <input type="text" id="description" name="description" placeholder="Ex : pizza avec du saumon" required>
        <br>
        <label for="preparation">Votre préparation:</label>
        <textarea name="preparation" id="preparation" required></textarea>
        <br>
        <input type="submit" value="Envoyer">
</form>
</div>

@include('footer')
