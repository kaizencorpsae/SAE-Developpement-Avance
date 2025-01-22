const ingredientsContainer = document.querySelector('.ingredients').parentElement;

let count_ingr = ingredientsContainer.childElementCount;
const add_ingredient = document.getElementById('add_ingredient');

add_ingredient.addEventListener('click', function () {

    // Incrémenter le compteur pour le prochain ingrédient
    count_ingr++;

    // Créer un conteneur pour le nouvel ingrédient
    const container = document.createElement('div');
    container.id = `ingredients${count_ingr}`;

    // Créer un paragraphe pour le libellé
    const p = document.createElement('p');
    p.textContent = `Ingrédients ${count_ingr} :`;

    // Créer un élément select
    const s = document.createElement('select');
    s.name = "ingredient[]";

    // Copier les options existantes
    const firstSelect = ingredientsContainer.querySelector('select');
    if (firstSelect) {
        firstSelect.querySelectorAll('option').forEach(option => {
            const newOption = document.createElement('option');
            newOption.value = option.value;
            newOption.textContent = option.textContent;
            s.appendChild(newOption);
        });
    }

    // Créer un bouton de suppression
    const b = createButtonRemove()

    // Ajouter l'événement de suppression
    b.addEventListener('click', function () {
        container.remove();
        count_ingr --;
    });

    // Ajouter les éléments au conteneur
    container.appendChild(p);
    container.appendChild(s);
    container.appendChild(b);

    // Ajouter le conteneur au parent
    ingredientsContainer.appendChild(container);
});

const ul = document.getElementById('preparation')

let count_prepa = ul.childElementCount
const add_preparation = document.getElementById('add_preparation')
add_preparation.addEventListener('click', function () {

    let li = document.createElement('li')

    let p = document.createElement('p')
    p.classList = ul.querySelector('.name').classList
    p.textContent = "Etape " + count_prepa + " :"

    let input = document.createElement('input')
    input.type = "text"
    input.name = "preparation[" + count_prepa + "]"

    const b = createButtonRemove()
    b.addEventListener('click', function () {
        removeContainer(li)
        count_prepa --;
    });

    li.append(p)
    li.append(input)
    li.append(b)

    createButtonRemove(li)

    ul.append(li)

    count_prepa ++;
})

function createButtonRemove() {
    const b = document.createElement('button');
    b.type = "button";
    b.style =  "color:red; margin-left : 5px";
    b.textContent = "X";

    return b
}

function removeContainer(container) {
    container.remove()
}

const bs = document.querySelectorAll(".remove")
bs.forEach((b)=>b.addEventListener('click', function () {
    let div = b.parentElement
    removeContainer(div)
}))

