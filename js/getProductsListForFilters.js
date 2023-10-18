const seccionesHtml = document.querySelector('#seccions');
const categoriaHtml = document.querySelector('#categoria');

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

const itemByPage = document.querySelector('#items-forPage');
const seccionsByPage = document.getElementsByName('seccions-options');
const categoryByPage = document.getElementsByName('category-options');

function getSelectedFilters(elementsHtml) {
    const selected = [];

elementsHtml.forEach((item) => {
    console.log(item.value);
    item.addEventListener ('click', (e)=> {
    if(item.checked){
        selected.push(item.value);
    } else{
        let toDelete = selected.indexOf(item.value);       
        if(toDelete !== -1){
            selected.splice(toDelete, 1);
        }
    }
    console.log(selected); 
    });
    
})
return selected;
}
let selectedSeccions = getSelectedFilters(seccionsByPage);
let categorySeccions= getSelectedFilters(categoryByPage);






