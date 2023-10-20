const purchaseGmail = JSON.parse(localStorage.getItem("carrito")) || [];
function requestByGmail(dataToSend) {
    const xhr = new XMLHttpRequest();
        xhr.open("POST", "../php/requestProductsStore.php", true);
        xhr.setRequestHeader("Content-Type", "application/json");

        xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {

        let productsWithFilters = JSON.parse(xhr.responseText);
        const structure = document.querySelector("#productsListFilter"); 
            renderProductsFilter(productsWithFilters, structure);
        }
        };
        dataToSend? xhr.send(JSON.stringify(dataToSend)) : xhr.send();
}
requestByGmail(purchaseGmail);