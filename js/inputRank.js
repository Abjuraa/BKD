const minPriceInput = document.getElementById("minPrice");
const maxPriceInput = document.getElementById("maxPrice");
const minPriceValue = document.getElementById("minPriceValue");
const maxPriceValue = document.getElementById("maxPriceValue");

// Actualizar los valores iniciales
minPriceValue.textContent = minPriceInput.value;
maxPriceValue.textContent = maxPriceInput.value;

// Manejar cambios en los controles deslizantes
minPriceInput.addEventListener("input", updatePriceRange);
maxPriceInput.addEventListener("input", updatePriceRange);

minPriceValue.textContent = formatCurrency(minPriceInput.value);
maxPriceValue.textContent = formatCurrency(maxPriceInput.value);

function updatePriceRange() {
    minPriceValue.textContent = formatCurrency(minPriceInput.value);
    maxPriceValue.textContent = formatCurrency(maxPriceInput.value);

    // Asegurar que el valor mínimo sea menor que el valor máximo
    if (parseInt(minPriceInput.value) >= parseInt(maxPriceInput.value)) {
        minPriceInput.value = maxPriceInput.value - 1;
        minPriceValue.textContent = formatCurrency(minPriceInput.value);
    }
}

// Formatear números como moneda
function formatCurrency(value) {
    return value.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}
