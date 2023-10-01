//Cambio de cantidad ingresado en el input
let minusBtn = document.querySelector('.minus');
let plusBtn = document.querySelector('.plus');
let userInput = document.querySelector('.input_number');

let userInputNumber = 0;

plusBtn.addEventListener('click', ()=>{
  userInputNumber++;
  userInput.value = userInputNumber;
  console.log(userInputNumber)
});

minusBtn.addEventListener('click', ()=>{
  userInputNumber--;
  if(userInputNumber<= 0){
    userInputNumber = 0;
  }
  userInput.value = userInputNumber;
  console.log(userInputNumber);
});

//Agregar la cantidad de productos al presionar el carrito de compras

const addToCartBtn = document.querySelector('.button-cart');
let cartNotification = document.querySelector('.item-number-cart');
let minCartNotification = document.querySelector('.item-number-mincart');
let numProducts = document.querySelector('.num-products');
let priceModal = document.querySelector('.price');
var product = document.querySelector('.name-product');
let nameItem = document.querySelector('.subname');
let img = document.querySelector('.image-show');
let imgCart = document.querySelector('.object-cover');
let lastValue = parseInt(cartNotification.innerText);
let nameProduct = product.innerText;
let imgProduct = img.innerHTML;


addToCartBtn.addEventListener('click', ()=>{
  lastValue = lastValue + userInputNumber;
  cartNotification.innerText = lastValue;
  minCartNotification.innerText = lastValue;
  numProducts.innerHTML = lastValue;
  priceModal.innerHTML = `<span>$${lastValue*2000}</span><span class="fly-item"><span>x${lastValue}</span></span>`;
  nameItem.innerHTML = `<a href="#">${nameProduct}</a>`;
  imgCart.innerHTML = `<a href="#"><img src="${imgProduct} alt=""></a>`;
});

//Mostrar el modal con los detalles del carrito

const cartIconBtn = document.querySelector('.icon-large');
const cartModal = document.querySelector('.mini-cart');

cartIconBtn.addEventListener('click', ()=>{
  cartModal.style.display = 'block';
})
//borrar el contenido del carrito

const deleteCartBtn = document.querySelector('.item-remove');
const productContainer = document.querySelector('.cart-body');

deleteCartBtn.addEventListener('click', ()=>{
  productContainer.innerHTML = '<p class="cart-empty">Tu carrito esta vacio</p>';
  lastValue = 0;
  cartNotification.innerText = lastValue;
  numProducts.innerHTML = lastValue;
});



