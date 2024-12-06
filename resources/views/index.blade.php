@include('begin')

<body class="bg-gray-800 text-white">

<header class="text-center py-6">
    <h1 class="text-3xl font-semibold">Liste des Plats</h1>
</header>

<section id="about" class="bg-gray-700 py-12">
    <div class="max-w-4xl mx-auto text-center px-4">
        <h2 class="text-2xl font-bold mb-4">Bienvenue sur Let Me Cook</h2>
        <p class="text-gray-300">
            Ce projet a été développé dans le cadre de la SAE S5
        </p>
    </div>
</section>

<div class="max-w-7xl mx-auto px-4 mt-8">
    <form method="GET" action="{{ route('search') }}" class="mb-6 flex items-center space-x-4">
        <input
            type="text"
            name="query"
            placeholder="Rechercher un plat ou un ingrédient"
            class="p-3 rounded-lg bg-gray-700 text-white flex-1"
        >
        <button
            type="submit"
            class="bg-blue-600 text-white py-3 px-6 rounded-lg hover:bg-blue-700"
        >
            Rechercher
        </button>
    </form>
</div>

@include('footer')
