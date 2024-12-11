@include('begin')
<body class="bg-gray-800 text-white">

    <header class="text-center py-6">
        <h3 class="text-3xl font-semibold">Recette du plat</h3>
    </header>

    <!-- Image du plat -->
    <div style="width: 80%; height: 500px; margin: 0 auto; display: flex; justify-content: center; align-items: center; border-radius: 12px; overflow: hidden;">
        <img 
            src="{{ $plat->image->url }}" 
            style="width: 100%; height: 100%; object-cover: contain; border-radius: 12px;"
        >        
    </div>
    <h4 class="text-3xl font-semibold text-center">{{ $plat->nom }}</h4>
    <br><br>


    <!-- Ingrédients du plat -->
    <div class="max-w-7xl mx-auto px-4 py-6">
        <h4 class="text-2xl font-semibold mb-4" style="display: inline-flex; align-items: center;">
            <img src="images/icon_ingredients.png" style="width: 35px; height: 35px; margin-right: 8px;">
            Ingrédients
        </h4>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach($ingredients as $ingredient)
                <div class="bg-main-600 p-4 rounded-lg text-center">  
                    @if($ingredient->image)
                        <img 
                            src="{{ $ingredient->image_url }}"  
                            class="w-full h-64 object-cover rounded-lg mb-4"
                        >
                    <p class="text-lg font-medium">{{ $ingredient->nom }}</p>
                    @else
                        <img src="/images/unknownimage.png" class="w-full h-64 object-cover rounded-lg mb-4">
                    @endif
                </div>
            @endforeach
        </div>
    </div>

@include('footer')
