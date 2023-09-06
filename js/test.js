// Obtén referencias a los elementos del DOM
const filtroInput = document.getElementById('filtro');
const lista = document.getElementById('lista');
const elementos = lista.getElementsByTagName('li');

// Agrega un evento de escucha para el input de filtro
filtroInput.addEventListener('input', filtrarElementos);

function filtrarElementos() {
  const filtro = filtroInput.value.toLowerCase();

  for (let i = 0; i < elementos.length; i++) {
    const elemento = elementos[i];
    const textoElemento = elemento.textContent.toLowerCase();

    if (textoElemento.includes(filtro)) {
      elemento.style.display = 'block'; // Muestra el elemento
    } else {
      elemento.style.display = 'none'; // Oculta el elemento
    }
  }
}
