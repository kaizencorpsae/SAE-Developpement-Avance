@include('begin')

<header class="bg-main-800 text-center py-6">
    <h1 class="text-3xl font-semibold">Liste des Plats</h1>
</header>

<section id="about" class="bg-main-850 py-16">
    <div class="max-w-4xl mx-auto text-center px-4">
        <h2 class="text-2xl font-bold mb-4">Bienvenue sur Let Me Cook</h2>
        <p class="text-gray-300">
            Ce projet a été développé dans le cadre de la SAE S5
        </p>
    </div>
    <div class="text-center py-10 bg-main-850">
        <p class="text-gray-300 mb-4">
            Pour voir la liste des plats :
        </p>
        <a href="/plats" class="inputmain text-white py-2 px-4 rounded-lg">
            Liste des plats
        </a>
    </div>
</section>

<div class="max-w-7xl mx-auto px-6 my-10">
    <form method="GET" action="{{ route('search') }}" class="flex items-center space-x-4">
        <input
            type="text"
            name="query"
            placeholder="Rechercher un plat ou un ingrédient"
            class="p-3 rounded-lg bg-main-700 text-white flex-1"
            required
        >
        <button
            type="submit"
            class="inputmain text-white py-3 px-6 rounded-lg"
        >
            Rechercher
        </button>
    </form>
</div>

@include('footer')
