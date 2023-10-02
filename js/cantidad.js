//Cambio de cantidad ingresado en el input
let minusBtn = document.querySelector(".minus");
let plusBtn = document.querySelector(".plus");
let userInput = document.querySelector(".input_number");

let userInputNumber = 0;

plusBtn.addEventListener("click", () => {
  userInputNumber++;
  userInput.value = userInputNumber;
});

minusBtn.addEventListener("click", () => {
  userInputNumber--;
  if (userInputNumber <= 0) {
    userInputNumber = 0;
  }
  userInput.value = userInputNumber;
});



//Agregar la cantidad de productos al presionar el carrito de compras

const addToCartBtn = document.querySelector(".button-cart");
let cartNotification = document.querySelector(".item-number-cart");
let minCartNotification = document.querySelector(".item-number-mincart");
let numProducts = document.querySelector(".num-products");
let priceModal = document.querySelector(".price");
var product = document.querySelector(".name-product");
let nameItem = document.querySelector(".subname");
let img = document.querySelector(".image-show");
let imgCart = document.querySelector(".object-cover");
let lastValue = parseInt(cartNotification.innerText);
let nameProduct = product.innerText;
let imgProduct = img.innerHTML;
let products = document.querySelector(".products");

let productos = [];

addToCartBtn.addEventListener("click", () => {
  lastValue = lastValue + userInputNumber;
  cartNotification.innerText = lastValue;
  minCartNotification.innerText = lastValue;
  numProducts.innerHTML = lastValue;

  if (productos.length == 0) {
    productos.push({
      id: 1,
      name: nameProduct,
      price: 80.9,
      image: imgProduct,
      count: lastValue,
      total:lastValue * 80.9,
    });

    console.log(productos);
  } else {
    productos.forEach((p) => {
      if (p.name == nameProduct) {
        p.count = p.count + userInputNumber;
        p.total = p.count * p.price;
      } else {
        productos.push({
          id: 1,
          name: nameProduct,
          price: 80.9,
          image: imgProduct,
          count: lastValue,
          total: lastValue * 80.9,
        });
      }
    });

    
  }
  
  productos.forEach((p) => {
    products.innerHTML = `
      <li class="item" id="${p.id}">
      <div class="thumbnail object-cover">
          <a href="#"><img src="${p.image}" alt=""></a>
      </div>
      <div class="item-content">
          <p><a href="#">${p.name}</a></p>
          <span class="price">
              <span>$${p.total.toFixed(1)}</span>
              <span class="fly-item"><span>X${p.count}</span></span>
          </span>
      </div>
      <a href="" class="item-remove"><i class="ri-close-line"></i></a>
    </li>
  `;
  });
  
  const cartTotal = document.querySelector(".cart-total");
  const subTotal =  document.querySelector(".subtotal");
  let total=0;
  
  productos.forEach((p)=>{
     total += p.total;
  })
  
  cartTotal.innerHTML=`
    $ ${total.toFixed(1)}
  `;
  
  
  subTotal.innerHTML =`
  <p>Subtotal</p>
  <p><strong class="">${total.toFixed(1)}</strong></p>
  `;
  


  
});

//Mostrar el modal con los detalles del carrito

const cartIconBtn = document.querySelector(".icon-large");
const cartModal = document.querySelector(".mini-cart");

cartIconBtn.addEventListener("click", () => {
  cartModal.style.display = "block";
});


//borrar el contenido del carrito

const deleteCartBtn = document.querySelector(".item-remove");
const productContainer = document.querySelector(".products");

deleteCartBtn.addEventListener("click", (e) => {
  let toDelete = e.target.parentElement;

  console.log(toDelete);
  
  
  if(productos.length == 0){
    
    const mesage =  document.createElement('li');
    
      mesage.innerHTML =`
        Tu carrito esta vacio
      `
    
    productContainer.appendChild(mesage);
  
  }

  //productContainer.innerHTML = '<li class="cart-empty">Tu carrito esta vacio</li>';
  //lastValue = 0;
  //cartNotification.innerText = lastValue;
  //numProducts.innerHTML = lastValue;
});
