const cartPayList = JSON.parse(localStorage.getItem("carrito")) || [];
const payProductsList = document.querySelector("#payProductsList");
const subTotalCompra = document.querySelector("#subTotalCompra");
const descuentoCompra = document.querySelector("#descuentoCompra");
const envioCompra = document.querySelector("#envioCompra");
const totalCompra = document.querySelector("#totalCompra");

payProductsList.innerHTML = ""; 
cartPayList .forEach(s => {
    let child = `<li class="item">
    <div class="thumbnail object-cover">
        <img src="${decode_img(s.image)}" alt="">
    </div>
    <div class="item-content">
        <p>${s.name}</p>
        <span class="price">
            <span>${USDollar.format(s.total)}</span>
            <span>x${s.count}</span>
        </span>
    </div>
    </li>`; 
    payProductsList.innerHTML += child;
});

let subTotal = cartPayList.reduce((a, p) => a + p.total, 0);
let total = subTotal + 5000;
let descuento = cartPayList.reduce((a, p) => a + p.totalWithOutDiscount, 0) - subTotal;

subTotalCompra.innerHTML = USDollar.format(subTotal);
descuentoCompra.innerHTML = USDollar.format(descuento);
envioCompra.innerHTML = USDollar.format(5000);
totalCompra.innerHTML = USDollar.format(total);

