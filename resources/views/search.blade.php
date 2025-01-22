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
                    <!-- Boutons modifier et supprimer -->
                    @auth
                        @if(auth()->user()-> is_admin)  <!-- Afficher les boutons si l'utilisateur est administrateur -->
                        <div class="flex justify-center space-x-4 mt-4">
                            <a href="{{ route('plats.edit', $plat->id) }}" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-700">Modifier</a>
                            <form action="{{ route('plats.destroy', $plat->id) }}" method="post" class="inline">
                                @csrf
                                @method("delete")
                                <input
                                    type="submit"
                                    value="Supprimer"
                                    class="px-4 py-2 bg-red-400 text-white rounded hover:bg-red-600 cursor-pointer">
                            </form>
                        </div>
                        @endif
                    @endauth
                </div>
            @endforeach
        @endif
    </div>
</div>
<div class="d-flex flex justify-center mb-5">
    {{ $plats->links() }}
</div>

@include('footer')
