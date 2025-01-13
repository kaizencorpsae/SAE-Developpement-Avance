@include('begin')

<header class="bg-main-750 text-center py-6 pt-28">
    <h1 class="text-3xl font-semibold">Modifier le plat {{$plat->nom}}</h1>
</header>

<div class="crud">
    <form action="{{route('plats.update', $plat->id)}}" method="post">
        @csrf
        @method('put')
        <label for="nom">Nom du plat :</label>
        <input type="text" id="nom" name="nom" value="{{$plat->nom}}">
        <br>
        <label for="description">Description du plat :</label>
        <input type="text" id="description" name="description" value="{{$plat->description}}">
        <br>
        <p>Votre preparation :</p>
        <ul class="pl-5 text-xl list-none">
            @foreach (explode("\n", $plat->preparation) as $index => $step)
                @if (trim($step) !== '') <!-- Ignorer les lignes vides -->
                <li>
                    <p>Etape {{$index+1}}:</p>
                    <input type="text" name="preparation[{{$index}}]" value="{{ $step }}">
                </li><br>
                @endif
            @endforeach
        </ul>
        <br>
        <input type="hidden" name="image_id" value="{{$plat->image_id}}">
        <input type="submit" value="Modifier" class="inputmain text-white py-2 px-5 rounded-lg">
    </form>
</div>

@include('footer')
