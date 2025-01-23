@include('begin')

<body class="bg-main-800 text-white">

<header class="text-center py-6 pt-28">
    <h1 class="text-3xl font-semibold">Recherchez votre plat ou ingrédient :</h1>
</header>

<div id="selecteur" class="crud flex justify-center">
    <input type="text" placeholder="Chercher un plat">
</div>

<div style="display: flex; justify-content: center">
    <h3 class="text-3xs font-semibold" id="count">Nombre de plats trouvés : 0</h3>
</div>

<div class="alert alert-danger text-center mt-3" role="alert" style="display: none">
    <h3 class="text-3xs font-semibold" id="errorMessage"></h3>
</div>

<div class="max-w-7xl mx-auto my-10 px-4">
    <div id="box_plats" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
    </div>
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
        const errorMessage = document.getElementById('errorMessage');
        try {
            const response = await fetch(`/selecteur?query=${encodeURIComponent(query)}`);

            if (!response.ok) {
                throw new Error(`HTTP error! status: ${response.status}`);
            }

            const data = await response.json();
            let plats = data.plats;

            if (!Array.isArray(plats)) {
                plats = Object.values(plats);
            }

            const resultContainer = document.getElementById('box_plats');
            const countElement = document.getElementById('count');

            // Réinitialise les plats
            resultContainer.innerHTML = '';

            // Met à jour le nombre de plats trouvés
            countElement.textContent = `Nombre de plats trouvés : ${plats.length}`;

            // Ajoute chaque plat dans le conteneur
            plats.forEach(plat => {
                resultContainer.insertAdjacentHTML('beforeend', plat);
            });
        } catch (error) {
            let txt = 'Erreur lors de la sélection des plats'
            console.error(txt+':', error);
            errorMessage.parentElement.style.display = "block";
            errorMessage.textContent = txt;
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
