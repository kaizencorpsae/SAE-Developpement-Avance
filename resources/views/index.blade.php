<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Liste des Plats</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-800 text-white">

<header class="text-center py-6">
    <h1 class="text-3xl font-semibold">Liste des Plats</h1>
</header>

<div class="max-w-7xl mx-auto px-4">
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

<footer class="text-center py-6 bg-gray-900 mt-8">
    <p class="text-gray-400">&copy; 2024 SAE - Test. Tous droits réservés.</p>
</footer>

</body>
</html>
