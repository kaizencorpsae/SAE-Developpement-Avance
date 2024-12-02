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
    <h3 class="text-3xl font-semibold">SAE - TEST - Liste des Plats</h3>
</header>

<div class="max-w-7xl mx-auto px-4">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($plats as $plat)
            <div class="bg-gray-900 p-6 rounded-lg shadow-lg">
                <h2 class="text-2xl font-bold mb-2">{{ $plat->nom }}</h2>
                <p class="text-gray-400 mb-4">{{ $plat->description }}</p>

                @if ($plat->image)
                    <img src="{{ $plat->image->url }}" alt="{{ $plat->nom }}" class="w-full h-64 object-cover rounded-lg mb-4">
                @else
                    <p class="text-gray-500">Aucune image disponible</p>
                @endif
            </div>
        @endforeach
    </div>
</div>

<!-- Footer -->
<footer class="text-center py-6 bg-gray-900 mt-8">
    <p class="text-gray-400">&copy; 2024 SAE - Tous droits réservés.</p>
</footer>

</body>
</html>
