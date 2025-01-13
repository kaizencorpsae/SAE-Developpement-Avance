<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="/images/letmecooklogobig.png">
    <title>Let Me Cook</title>
    <link href="/resources/" rel="stylesheet">
    <link href="/css/main.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.6.0/css/all.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.6.0/css/sharp-duotone-solid.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.6.0/css/sharp-thin.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.6.0/css/sharp-solid.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.6.0/css/sharp-regular.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.6.0/css/sharp-light.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alata&family=Alegreya:ital,wght@0,400;0,700;1,400;1,700&family=Amiri:ital,wght@0,400;0,700;1,400;1,700&family=Comfortaa:wght@300;700&family=Inconsolata:wght@200;900&family=Inter:wght@100;400;900&family=Poppins:wght@100;400;700;900&family=Source+Code+Pro:wght@200;900&display=swap" rel="stylesheet">
    <script src="/js/main.js"></script>
</head>

<body class="bg-main-800 text-white">

<header class="bg-header header py-1 shadow-lg h-20">
    <div class="linkheader max-w-7xl h-full mx-auto px-4 flex items-center justify-between">
        <a href="/" class="flex items-center space-x-4 items-end h-full">
                <img src="/images/letmecooklogobig.png" alt="Logo" class="w-16 h-16">
                <h1 class="text-3xl font-semibold pt-4 text-white amiri">LetMeCook</h1>
        </a>
        <div class="flex items-center justify-between space-x-8 h-full">
            <a href="{{route('plats.index')}}" class="flex items-center h-full">
                <h1 class="text-3xl font-semibold text-white">Plats</h1>
            </a>
            <form method="GET" action="{{ route('search') }}" class="flex items-center space-x-2">
                <input
                    type="text"
                    name="query"
                    placeholder="Rechercher"
                    class="p-2 rounded-lg bg-main-700 text-white flex-1"
                    required
                >
                <button
                    type="submit"
                    class="inputmain text-white py-2 px-5 rounded-lg"
                >
                    <i class="fa-light fa-magnifying-glass text-gray-200"></i>
                </button>
            </form>
        </div>
    </div>
</header>
