@include('begin')

<header class="bg-main-750 text-center py-6">
    <h1 class="text-3xl font-semibold">{{ $plat->nom }}</h1>
</header>

<div class="bg-main-650 w-1/4 lg:w-1/3 mx-auto px-1 py-1 mt-8 mb-6 rounded-lg overflow-hidden shadow-lg">
    <img
        src="{{ $plat->image->url }}"
        class="w-full h-80 object-cover rounded-lg mb-1"
        alt="{{ $plat->nom }}"
    >
</div>

<div class="max-w-7xl mx-auto px-6 py-8">
    <h4 class="text-2xl font-semibold mb-4 flex items-center">
        <img src="images/icon_ingredients.png" class="w-9 h-9 mr-2" alt="">
        Ingrédients
    </h4>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        @foreach($ingredients as $ingredient)
            <div class="bg-main-650 p-4 rounded-lg text-center">
                @if($ingredient->image)
                    <img
                        src="{{ $ingredient->image->url }}"
                        class="w-full h-40 object-cover rounded-lg mb-4"
                     alt="">
                @else
                    <img src="/images/unknownimage.png" class="w-full h-40 object-cover rounded-lg mb-4" alt="">
                @endif
                <p class="text-lg font-medium">{{ $ingredient->nom }}</p>
            </div>
        @endforeach
    </div>
</div>

@include('footer')
