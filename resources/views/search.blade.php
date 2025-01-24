@include('begin')

<body class="bg-main-800 text-white">

<header class="text-center py-6 pt-28">
    <h1 class="text-3xl font-semibold">Recherchez votre plat ou ingrédient :</h1>
</header>

<div id="selecteur" class="crud flex justify-center relative mx-auto mt-4 mb-4 px-6 py-15" style="max-width: 50rem;">
    <input type="text" placeholder="Chercher un plat" class="p-3 rounded-lg bg-main-700 text-white flex-1">
</div>

<div style="display: flex; justify-content: center">
    <h3 class="text-3xs font-semibold" id="count"></h3>
</div>

<div class="alert alert-danger text-center mt-3" role="alert" style="display: none">
    <h3 class="text-3xs font-semibold" id="errorMessage"></h3>
</div>

<div class="max-w-7xl mx-auto my-20 px-4">
    <div id="box_plats" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
    </div>
</div>

<script>
    const selecteur = document.getElementById('selecteur');
    selecteur.addEventListener('input', handlerSelector);

    let duration;
    let debounceTimeout;
    const DEBOUNCE_DELAY = 200;

    // Récupère le texte de la barre de recherche
    function handlerSelector(event) {
        const query = event.target.value.trim();
        duration = 0;

        // Annuler le timeout précédent
        if (debounceTimeout) {
            clearTimeout(debounceTimeout);
        }

        // Définir un nouveau timeout pour appeler platSelector après le délai de debounce
        debounceTimeout = setTimeout(() => {
            platSelector(query);
        }, DEBOUNCE_DELAY);
    }

    const countElement = document.getElementById('count');

    async function platSelector(query) {
        console.log('Début de la requête pour la query:', query);

        const startTime = performance.now();
        let error;

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

            // Réinitialise les plats
            resultContainer.innerHTML = '';

            const endTime = performance.now();
            duration = endTime - startTime;

            // Met à jour le nombre de plats trouvés
            let textCount;
            if (plats.length > 0) {
                textCount = `${plats.length}/30 plats correspondants en ${duration} ms`;
            } else {
                textCount = 'Votre requête ne correspond à aucun plat';
            }
            countElement.textContent = textCount;

            // Ajoute chaque plat dans le conteneur
            plats.forEach(plat => {
                resultContainer.insertAdjacentHTML('beforeend', plat);
            });
        } catch (e) {
            error = e
        }

        const errorMessage = document.getElementById('errorMessage');
        if (error) {
            let txt = 'Erreur lors de la sélection des plats';
            console.error(txt + ':', error);
            errorMessage.parentElement.style.display = "block";
            errorMessage.textContent = txt;
        } else {
            errorMessage.parentElement.style.display = "none";
        }

        console.log('Fin de la requête pour la query:', query);
    }

    const input = selecteur.querySelector('input')
</script>

@if(isset($query))
    <script>
        platSelector("{{ $query }}");
        input.value = "{{ $query }}";
    </script>
@else
    <script>
        platSelector('')
        input.value = "";
    </script>
@endif


<div class="text-center mt-28 mb-20">
    <a href="/" class="inputmain text-white py-3 px-6 rounded-lg">
        Retour à l'accueil
    </a>
</div>

@include('footer')
