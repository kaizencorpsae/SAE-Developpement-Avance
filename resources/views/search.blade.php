@include('begin')

<body class="bg-main-800 text-white">

<header class="text-center py-6 pt-28">
    <h1 class="text-3xl font-semibold">Rechercher votre plat ou ingrédient :</h1>
</header>

<div id="selecteur" class="crud flex justify-center">
    <input type="text" placeholder="Chercher un plat">
</div>

<div class="max-w-7xl mx-auto my-10 px-4">
    <div id="box_plats" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
    </div>
</div>
<div id="pagination" class="d-flex flex justify-center mb-5">

</div>

<script>
    const selecteur = document.getElementById('selecteur')
    selecteur.addEventListener('input', handlerSelector)

    // Récupère le texte de la barre de recherche
    function handlerSelector(event) {
        const query = event.target.value.trim();
        platSelector(query)
    }

    async function platSelector(query) {
        try {
            const response = await fetch(`/selecteur?query=${encodeURIComponent(query)}`);

            if (!response.ok) {
                throw new Error(`HTTP error! status: ${response.status}`);
            }

            const data = await response.json();

            const plats = data.plats;
            const resultContainer = document.getElementById('box_plats');

            // Réinitialise les plats
            resultContainer.innerHTML = '';

            // Ajoute chaque plat dans le conteneur
            plats.forEach(plat => {
                resultContainer.insertAdjacentHTML('beforeend', plat);
            });
        } catch (error) {
            console.error('Erreur lors de la sélection de plats:', error);
        }
    }
</script>

@if(isset($query))
    <script>
        platSelector("{{ $query }}");
        const i = document.getElementById('selecteur').querySelector('input')
        console.log(i)
        i.value = "{{ $query }}";
    </script>
@else
    <script>
        platSelector('')
    </script>
@endif


<div class="text-center mb-6">
    <a href="/" class="inputmain text-white py-2 px-4 rounded-lg">
        Retour à l'accueil
    </a>
</div>

@include('footer')
