const ingredientsContainer = document.getElementById('list_ingredients')

let count_ingr = ingredientsContainer.childElementCount;
const add_ingredient = document.getElementById('add_ingredient');

add_ingredient.addEventListener('click', async function () {
    // Créer un conteneur pour le nouvel ingrédient
    const container = document.createElement('div');
    container.classList.add('ingredients', 'max-w-7xl', 'lmcborder', 'flex', 'flex-col', 'rounded-xl', 'items-center', 'overflow-hidden', 'shadow-xl');

    // Créer la div avec la classe "bg-main-650 flex flex-row gap-1 items-center w-full py-3 px-4"
    const innerContainer = document.createElement('div');
    innerContainer.classList.add('bg-main-650', 'flex', 'flex-row', 'gap-1', 'items-center', 'w-full', 'py-3', 'px-4');

    // Créer un élément select
    const select = document.createElement('select');
    select.classList.add('text-2xl', 'font-semibold', 'amiri', 'w-full');
    select.name = "ingredient[]";
    select.onchange = function() { updateIngredientImage(select); };

    // Copier les options existantes
    const firstSelect = ingredientsContainer.querySelector('select');
    if (firstSelect) {
        firstSelect.querySelectorAll('option').forEach(option => {
            const newOption = document.createElement('option');
            newOption.value = option.value;
            newOption.textContent = option.textContent;
            select.appendChild(newOption);
        });
    }

    // Créer un bouton de suppression
    const buttonRemove = document.createElement('button');
    buttonRemove.type = 'button';
    buttonRemove.textContent = '×';
    buttonRemove.style.color = '#ff876c';
    buttonRemove.style.marginLeft = '5px';
    buttonRemove.classList.add('remove', 'text-3xl');


    // Ajouter l'événement de suppression
    buttonRemove.addEventListener('click', function () {
       removeContainer(container);
    });

    // Ajouter le select et le bouton de suppression à la div interne
    innerContainer.appendChild(select);
    innerContainer.appendChild(buttonRemove);

    // Créer la div pour l'image de l'ingrédient
    const imageContainer = document.createElement('div');
    imageContainer.classList.add('image_ingredient');
    const img = document.createElement('img');
    img.src = await getImageUrl(1);
    img.classList.add('w-full', 'h-40', 'object-cover');
    imageContainer.appendChild(img);

    // Ajouter les éléments au conteneur principal
    container.appendChild(innerContainer);
    container.appendChild(imageContainer);

    // Ajouter le conteneur au parent
    ingredientsContainer.appendChild(container);

    // Incrémenter le compteur d'ingrédients
    count_ingr++;
});


let divprepa = document.querySelector('#preparation');
let ulprepa = divprepa.querySelector('ul');
let count_prepa = ulprepa.childElementCount +1;

const add_preparation = document.getElementById('add_preparation');
add_preparation.addEventListener('click', function () {

    let li = document.createElement('li')
    li.classList.add('mb-4');

    let p = document.createElement('p')
    p.classList = ulprepa.querySelector('.name').classList;
    p.textContent = "— ÉTAPE " + count_prepa + " :"

    let input = document.createElement('input')
    input.type = "text"
    input.name = "preparation[" + count_prepa + "]"
    input.classList.add('text-lg', 'w-full');

    const b = createButtonRemove()
    b.addEventListener('click', function () {
        removeContainer(li)
        count_prepa --;
    });

    let divinputb = document.createElement('div')
    divinputb.classList.add('flex', 'gap-2');
    li.append(p)
    divinputb.append(input)
    divinputb.append(b)
    li.append(divinputb)


    createButtonRemove(li)

    ulprepa.append(li)

    count_prepa ++;
})

function createButtonRemove() {
    const b = document.createElement('button');
    b.type = "button";
    b.style =  "color:#ff876c; margin-left : 5px";
    b.textContent = "×";
    b.classList.add('remove', 'text-3xl');

    return b
}

function removeContainer(container) {
    container.remove()
}

// Bouttons deja existants
const bs = document.querySelectorAll(".remove")
bs.forEach((b)=>b.addEventListener('click', function () {
    let div = b.closest('.ingredients')
    removeContainer(div)
}))

async function updateIngredientImage(selectElement) {
    const ingredientId = selectElement.value;
    const ingredientContainer = selectElement.closest('.ingredients');
    const imageContainer = ingredientContainer.querySelector('.image_ingredient');
    const imageElement = imageContainer.querySelector('img');

    imageElement.src = await getImageUrl(ingredientId);
}

async function getImageUrl(id) {
    try {
        const response = await fetch(`/get_ingredient_image/${id}`);

        if (!response.ok) {
            throw new Error(`HTTP error! status: ${response.status}`);
        }

        const data = await response.json();

        if (data && data.imageUrl) {
            return data.imageUrl;
        } else {
            console.error('La réponse ne contient pas de clé "imageUrl".');
        }
    } catch (error) {
        console.error('Erreur lors de la récupération de l\'image de l\'ingrédient:', error);
    }
    return '/images/unknownimage.png';
}

