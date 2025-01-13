@include('begin')

<section id="plat" class="flex justify-center ptheader">
    <div class="bg-main-750 w-3/5 lmcborder flex flex-col rounded-xl items-center overflow-hidden mt-8 mb-20 shadow-xl">
        <div class="bg-main-700 w-full text-center py-6">
            <h1 class="text-4xl font-semibold amiri">{{ $plat->nom }}</h1>
        </div>
        <div class="w-full mx-auto overflow-hidden shadow-lg imgplat">
            <img
                src="{{ $plat->image->url }}"
                class="w-full h-80 object-cover"
                alt="{{ $plat->nom }}"
            >
        </div>
        <div class="w-3/4 py-16 flex flex-col space-between">
            <div id="description" class="w-full">
                <div class="flex flex-row justify-between w-full mb-4">
                    <h4 class="text-3xl font-semibold mb-4 flex items-center">
                        <img src="{{ asset('images/icon_text.png') }}" class="w-9 h-9 mr-4" alt="">
                        Description
                    </h4>
                    <hr class="mr-6 mt-6 w-8/12">
                </div>
                <p class="text-lg">{{ $plat->description }}</p>
            </div>

            <div id="ingredients" class="w-full mt-20 mb-6">
                <div class="flex flex-row justify-between w-full mb-5">
                    <h4 class="text-3xl font-semibold mb-4 flex items-center">
                        <img src="{{ asset('images/icon_ingredients.png') }}" class="w-9 h-9 mr-4" alt="">
                        Ingrédients
                    </h4>
                    <hr class="mr-6 mt-6 w-8/12">
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-4 w-11/12">
                    @foreach($plat->ingredients as $ingredient)
                        <div class="max-w-7xl lmcborder flex flex-col rounded-xl items-center overflow-hidden shadow-xl">
                            <div class="bg-main-650 w-full py-3 px-5">
                                <p class="text-2xl font-semibold amiri">{{ $ingredient->nom }}</p>
                            </div>
                            @if($ingredient->image)
                                <img
                                    src="{{ $ingredient->image->url }}"
                                    class="w-full h-36 object-cover"
                                    alt=" ">
                            @else
                                <img src="{{ asset('/images/unknownimage.png') }}" class="w-full h-40 object-cover rounded-3xl mb-4" alt="">
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
            <div id="preparation" class="w-full mt-20 mb-12">
                <div class="flex flex-row justify-between w-full mb-5">
                    <h4 class="text-3xl font-semibold mb-4 flex items-center">
                        <img src="{{ asset('images/icon_preparation.png') }}" class="w-9 h-9 mr-4" alt="">
                        Préparation
                    </h4>
                    <hr class="mr-6 mt-6 w-8/12">
                </div>
                <ul class="text-xl list-none">
                    @foreach (explode("\n", $plat->preparation) as $index=>$step)
                        @if (trim($step) !== '')
                            <p class="text-main-grey alata">— ÉTAPE {{$index+1}}</p><li>{{ $step }}</li><br>
                        @endif
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>

@include('footer')
