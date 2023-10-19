const seccionesHtml = document.querySelector('#seccions');
const categoriaHtml = document.querySelector('#categoria');
const itemByPage = document.querySelector('#items-forPage');
const seccionsByPage = document.getElementsByName('seccions-options');
const categoryByPage = document.getElementsByName('category-options');
const bigPrice = document.querySelector('#maxPrice');
const littlePrice = document.querySelector('#minPrice');
const buttonSearch = document.querySelector('#button-searchStore');

secciones.forEach(e => {
    let childSection = `<li id=${e.id_secciones}>
    <input type="checkbox" name="seccions-options" id="${(e.nombre_seccion).split(" ")}" value="${e.id_secciones}">
    <label for=${(e.nombre_seccion).split(" ")}>
        <span class="checked"></span>
        <span>${capitalizar(e.nombre_seccion)}</span>
    </label>
    
</li>`;
seccionesHtml.innerHTML += childSection;
});

categoria.forEach(e => {
    let childCategoria = `<li id=${e.id_categoria}>
    <input type="checkbox" name="category-options" id="${(e.nombre_categoria).split(" ")}" value="${e.id_categoria}">
    <label for=${(e.nombre_categoria).split(" ")}>
        <span class="checked"></span>
        <span>${capitalizar(e.nombre_categoria)}</span>
    </label>
    
</li>`
categoriaHtml.innerHTML += childCategoria;
});

function getSelectedFilters(elementsHtml) {
    const selected = [];

elementsHtml.forEach((item) => {
    item.addEventListener ('click', (e)=> {
    if(item.checked){
        selected.push(item.value);
    } else{
        let toDelete = selected.indexOf(item.value);       
        if(toDelete !== -1){
            selected.splice(toDelete, 1);
        }
    }
    });
    
})
return selected;
}
let selectedSeccions = getSelectedFilters(seccionsByPage);
let categorySeccions = getSelectedFilters(categoryByPage);
let sizePage = 10;

const listItems = document.querySelectorAll("#dropdown-list li");

listItems.forEach(item => {
  item.addEventListener("click", () => {
    const selectedItemText = item.textContent;
    switch (selectedItemText) {
        case 'Mostrar 10 por página':
            sizePage = 10;
            break;

        case 'Mostrar 20 por página':
            sizePage = 20;
            break;

        case 'Mostrar 30 por página':
            sizePage = 30;
            break;
    
        default:
            break;
    }
  });
});

buttonSearch.addEventListener('click', e => {
    let littlePriceValue = littlePrice.value;
    let bigPriceValue = bigPrice.value;
    console.log(selectedSeccions);
    console.log(categorySeccions);
    console.log(sizePage);
    console.log(littlePriceValue);
    console.log(bigPriceValue);
    let requestObject = {
        'selectedSeccions' : selectedSeccions,
        'categorySeccions' : categorySeccions,
        'sizePage' : sizePage,
        'littlePriceValue' : littlePriceValue,
        'bigPriceValue' : bigPriceValue,
    }
const xhr = new XMLHttpRequest();
xhr.open("POST", "../php/requestProductsStore.php", true);
xhr.setRequestHeader("Content-Type", "application/json");

xhr.onreadystatechange = function () {
if (xhr.readyState == 4 && xhr.status == 200) {
// Manejar la respuesta del servidor (si es necesario)
console.log(xhr.responseText);
}
};
    xhr.send(JSON.stringify(requestObject));
})









