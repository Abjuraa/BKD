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
    userInputNumber = 1;
  }
  userInput.value = userInputNumber;
  console.log(userInputNumber);
});

//Agregar la cantidad de productos al presionar el carrito de compras

const addToCartBtn = document.querySelector('.button-cart');
let cartNotification = document.querySelector('.item-number-cart');
let minCartNotification = document.querySelector('.item-number-mincart');

addToCartBtn.addEventListener('click', ()=>{
  cartNotification.innerText = userInputNumber;
  console.log(cartNotification);
});

addToCartBtn.addEventListener('click', ()=>{
  minCartNotification.innerText = userInputNumber;
  console.log(cartNotification);
});

