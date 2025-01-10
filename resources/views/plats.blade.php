@include('begin')

<header class="bg-main-750 text-center py-6 pt-28">
    <h1 class="text-3xl font-semibold">Liste des Plats</h1>
</header>

<div class="bg-main-850 py-10">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($plats as $plat)
                <div class="bg-main-600 p-6 rounded-lg shadow-lg">
                    <a class="platehover" href="{{ route('plats.show', $plat->id) }}">
                        <h2 class="text-2xl font-bold mb-2">{{ $plat->nom }}</h2>
                        <p class="text-main-600 mb-4">{{ $plat->description }}</p>

                        @if ($plat->image)
                            <img src="{{ $plat->image->url }}" alt="{{ $plat->nom }}" class="w-full h-64 object-cover rounded-lg mb-4">
                        @else
                            <img src="/images/unknownimage.png" alt="unknown" class="w-full h-64 object-cover rounded-lg mb-4">
                        @endif
                    </a>
                    <h2 class="text-xl font-semibold mt-4">Ingrédients :</h2>
                    <ul class="list-disc list-inside text-white">
                        @forelse ($plat->ingredients as $ingredient)
                            <li>{{ $ingredient->nom }}</li>
                        @empty
                            <li>Aucun ingrédient.</li>
                        @endforelse
                    </ul>
                </div>
            @endforeach
        </div>
    </div>


</div>

@include('footer')
