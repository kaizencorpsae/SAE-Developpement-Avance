<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Liste des Plats</title>
    <!-- Lien vers Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-800 text-white">

<!-- Titre de la page -->
<header class="text-center py-6">
    <h3 class="text-3xl font-semibold">SAE - TEST - Liste des Images</h3>
</header>

<!-- Conteneur des plats -->
<div class="max-w-7xl mx-auto px-4">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($plats as $plat)
            <div class="bg-gray-900 p-6 rounded-lg shadow-lg">
                <!-- Nom du plat -->
                <h2 class="text-2xl font-bold mb-2">{{ $plat->nom }}</h2>
                <!-- Description du plat -->
                <p class="text-gray-400 mb-4">{{ $plat->description }}</p>

                <!-- Image du plat -->
                @if ($plat->image)
                    <img src="{{ $plat->image->url }}" alt="{{ $plat->nom }}" class="w-full h-64 object-cover rounded-lg mb-4">
                @else
                    <p>Aucune image disponible</p>
                @endif
            </div>
        @endforeach
    </div>
</div>

<!-- Footer ou autres sections -->
<footer class="text-center py-6 bg-gray-900 mt-8">
    <p class="text-gray-400">&copy; 2024 SAE - Test. Tous droits réservés.</p>
</footer>

</body>
</html>
