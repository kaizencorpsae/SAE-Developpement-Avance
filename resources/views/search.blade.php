@include('begin')

<body class="bg-main-800 text-white">

<header class="text-center py-6 pt-28">
    <h1 class="text-3xl font-semibold">Résultats pour "{{ $query }}"</h1>
</header>
<div class="text-center mb-6">
    <a href="/" class="inputmain text-white py-2 px-4 rounded-lg">
        Retour à l'accueil
    </a>
</div>

<div class="max-w-7xl mx-auto my-10 px-4">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        @if($plats->isEmpty())
            <p class="text-main-700 text-center">Aucun résultat trouvé.</p>
        @else
            @foreach($plats as $plat)
                <div class="bg-main-600 p-6 rounded-lg shadow-lg">
                    <a class="platehover" href="{{route("plats.show",$plat->id)}}">
                        <h2 class="text-2xl font-bold mb-2">{{ $plat->nom }}</h2>
                        <p class="text-grey-600 mb-4">{{ $plat->description }}</p>
                        @if($plat->image)
                            <img src="{{ $plat->image->url }}" alt="{{ $plat->nom }}" class="w-full h-64 object-cover rounded-lg mb-4">
                        @else
                            <p class="text-grey-600">Aucune image disponible</p>
                        @endif
                    </a>
                </div>
            @endforeach
        @endif
    </div>
</div>

@include('footer')
