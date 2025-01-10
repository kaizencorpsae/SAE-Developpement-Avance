@include('begin')

<section id="about" class="pb-16 items-center h-60vh">
    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" preload="auto" class="absolute w-screen object-cover z-0 inset-0 opacity-90 brightness-75" style="height: 60vh; filter: brightness(0.8)">
        <source src="/videos/compilcooking.mp4" type="video/mp4">
    </video>
    <div class="apparition relative opacity-1 flex items-center justify-center gap-48 shadow-2xl" style="z-index: 2; height: 60vh">

        <div class="flex-shrink-0 justify-center">
            <img src="/images/letmecooklogocomplete.png" alt="Logo" class="h-24">
        </div>

        <div class="text-left">
            <div class="relative z-[2]">
                <div class="max-w-4xl mx-auto pt-8">
                    <h2 class="text-4xl font-bold mb-4">Trouvez votre prochaine préparation</h2>
                    <p class="text-lg text-gray-200">
                        LetMeCook vous permet d'explorer une large sélection de plats.
                    </p>
                </div>
                <div class="py-10 px-4">
                    <a href="#search" onclick="document.querySelector('#search').focus();" class="inputmain text-white py-2 px-4 rounded-lg">
                        Rechercher un plat
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section Fonctionnalités -->
<section id="features" class="pt-16 bg-main-850 py-10">
    <div class="max-w-7xl mx-auto px-6 py-10">
        <h2 class="text-3xl font-bold text-center mb-14">Pourquoi utiliser Let Me Cook ?</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-main-900 text-center p-8 rounded-lg shadow-2xl">
                <i class="fa fa-utensils text-4xl text-main-500 mb-4"></i>
                <h3 class="text-xl font-semibold mb-4">Des recettes larges</h3>
                <p class="text-gray-200">Accédez à une base de données riche et pour tous les goûts.</p>
            </div>
            <div class="bg-main-900 text-center p-8 rounded-lg shadow-2xl">
                <i class="fa fa-carrot text-4xl text-main-500 mb-4"></i>
                <h3 class="text-xl font-semibold mb-4">Recherche par plats & ingrédients</h3>
                <p class="text-gray-200">Trouvez des recettes en fonction des plats ou ingrédients que vous avez sous la main.</p>
            </div>
            <div class="bg-main-900 text-center p-8 rounded-lg shadow-2xl">
                <i class="fa fa-heart text-4xl text-main-500 mb-4"></i>
                <h3 class="text-xl font-semibold mb-4">Simple et rapide</h3>
                <p class="text-gray-200">Une interface intuitive pour accéder rapidement à vos plats préférés.</p>
            </div>
        </div>
    </div>
    <div class="relative max-w-7xl mx-auto px-6 py-20">
        <h2 class="text-3xl font-bold text-center mt-8 mb-14">Recherchez un plat</h2>
        <form method="GET" action="{{ route('search') }}" class="flex items-center space-x-4">
            <input
                type="text"
                name="query"
                id="search"
                placeholder="Rechercher un plat ou un ingrédient"
                class="p-3 rounded-lg bg-main-700 text-white flex-1"
                required
            >
            <button
                type="submit"
                class="inputmain text-white py-3 px-5 rounded-lg"
            >
                <i class="fa-light fa-magnifying-glass text-gray-200"></i>
            </button>
        </form>
    </div>
</section>

<!-- Section 1 -->
<section class="py-24 bg-main-750 text-white">
    <div class="max-w-7xl mx-auto px-6 flex flex-col md:flex-row justify-evenly items-center space-y-8 md:space-y-0">
        <!-- Image -->
        <div class="md:w-1/4">
            <i class="fa fa-light fa-magnifying-glass text-8xl text-main-500 mb-4"></i>
        </div>
        <!-- Texte -->
        <div class="md:w-1/2">
            <h2 class="text-3xl font-bold mb-6">À la recherche d'un plat que vous voulez cuisiner ?</h2>
            <p class="text-lg mb-6">
                Utilisez notre barre de recherche pour trouver rapidement une recette parmi des plats.
            </p>
            <a href="#search" onclick="document.querySelector('#search').focus();" class="inputmain text-white py-3 px-5 rounded-lg bg-main-700">
                Rechercher un plat
            </a>
        </div>
    </div>
</section>

<!-- Section 2 -->
<section class="py-24 bg-main-800 text-white">
    <div class="max-w-7xl mx-auto px-6 flex flex-col md:flex-row justify-evenly items-center space-y-8 md:space-y-0">
        <!-- Image -->
        <div class="md:w-1/4">
            <i class="fa fa-light fa-magnifying-glass text-8xl text-main-500 mb-4"></i>
        </div>
        <!-- Texte -->
        <div class="md:w-1/2">
            <h2 class="text-3xl font-bold mb-6">Vous cherchez une recette qui contient vos ingrédients ?</h2>
            <p class="text-lg mb-6">
                Entrez un ingrédient, et nous vous suggérerons des plats à préparer.
            </p>
            <a href="#search" onclick="document.querySelector('#search').focus();" class="inputmain text-white py-3 px-5 rounded-lg bg-main-700">
                Commencer la recherche
            </a>
        </div>
    </div>
</section>

<!-- Section 3 -->
<section class="py-24 bg-main-750 text-white">
    <div class="max-w-7xl mx-auto px-6 flex flex-col md:flex-row justify-evenly items-center space-y-8 md:space-y-0">
        <!-- Image -->
        <div class="md:w-1/4">
            <i class="fa fa-light fa-magnifying-glass text-8xl text-main-500 mb-4"></i>
        </div>
        <!-- Texte -->
        <div class="md:w-1/2">
            <h2 class="text-3xl font-bold mb-6">On mange quoi ce soir ? Consultez la liste des plats !</h2>
            <p class="text-lg mb-6">
                Parcourez notre liste complète de plats pour découvrir des idées de recettes originales.
            </p>
            <a href="/plats" class="inputmain text-white py-3 px-5 rounded-lg bg-main-700">
                Voir les plats
            </a>
        </div>
    </div>
</section>


@include('footer')
