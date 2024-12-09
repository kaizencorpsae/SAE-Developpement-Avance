@include('begin')
<body class="bg-gray-800 text-white">

    <header class="text-center py-6">
        <h3 class="text-3xl font-semibold">Détails du plat</h3>
    </header>

    <!-- Image du plat -->
    <div class="max-w-7xl mx-auto px-4 my-6">
        <img class="rounded-lg mx-auto" src="{{ $plat->image_url }}" alt="{{ $plat->nom }}" style="max-height: 400px; object-fit: cover;">
    </div>

    <!-- Ingrédients du plat -->
    <div class="max-w-7xl mx-auto px-4 py-6">
        <h4 class="text-2xl font-semibold mb-4">Ingrédients</h4>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach($ingredients as $ingredient)
                <div class="bg-gray-700 p-4 rounded-lg text-center">
                    <img 
                        src="{{ $ingredient->image_url }}" 
                        alt="{{ $ingredient->nom }}" 
                        class="w-32 h-32 mx-auto mb-3 rounded-full object-cover"
                    >
                    <p class="text-lg font-medium">{{ $ingredient->nom }}</p>
                </div>
            @endforeach
        </div>
    </div>

@include('footer')
