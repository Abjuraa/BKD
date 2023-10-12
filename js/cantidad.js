// formato de numero a moneda
let USDollar = new Intl.NumberFormat('en-US', {
  style: 'currency',
  currency: 'USD',
  minimumFractionDigits: 0,
});


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
let priceModal = document.querySelector(".price");
var product = document.querySelector(".name-product");
let nameItem = document.querySelector(".subname");
let img = document.querySelector(".image-show");
let imgCart = document.querySelector(".object-cover");
let minCartNotification = document.querySelector(".item-number-mincart");
let cartNotification = document.querySelector(".item-number-cart");
const cartIconBtn = document.querySelector(".icon-large");
const cartModal = document.querySelector(".mini-cart");
const productContainer = document.querySelector(".products");
let lastValue = parseInt(cartNotification.innerText);
let nameProduct = product.innerText;
let imgProduct = img.innerHTML;

renderCart();

function decode_img(image){
  const binaryString = atob(image);
  const length = binaryString.length;
  const bytes = new Uint8Array(length);
      for (let i = 0; i < length; i++) {
          bytes[i] = binaryString.charCodeAt(i);
      }
  const blob = new Blob([bytes], { type: 'image/jpeg' });
  return URL.createObjectURL(blob);
};

addToCartBtn.addEventListener("click", (e) => {
  if(userInputNumber >= 1){
    
  
    const carContent = JSON.parse(localStorage.getItem("carrito")) || [];
    const id_Click = parseInt(e.target.parentElement.id);
    const exist = carContent.some(product => product.id === id_Click);
    if(exist){
      let index = carContent.findIndex(p =>  p.id === id_Click);
      carContent[index].count += userInputNumber;
      carContent[index].total = carContent[index].count * carContent[index].price;
      carContent[index].total = carContent[index].total - ((oferta_producto * carContent[index].total ) /100); 

    } else{
      let temTotal = precio_producto * userInputNumber;
      carContent.push({
        id: parseInt(id_prod),
        name: nombre_producto,
        price: parseInt(precio_producto),
        count: userInputNumber,
        image: img_producto_frente,
        total: temTotal - ((oferta_producto * temTotal)/100),
      })
    }
    localStorage.setItem("carrito", JSON.stringify(carContent));
    renderCart();
    // const localSavage = JSON.parse(localStorage.getItem("carrito")) || [];
  }
});

function renderCart (){
  const localGetOut = JSON.parse(localStorage.getItem("carrito")) || [];
  let numProducts = document.querySelector(".num-products");
  let products = document.querySelector(".products");

  numProducts.innerHTML = localGetOut.length;
  cartNotification.innerHTML = localGetOut.length;
  products.innerHTML = "";

  localGetOut.forEach((p) => {
    let liProductHTML = document.createElement('li');    
    liProductHTML.className += "item";
    liProductHTML.id = p.id;
    let thumbnailHTML = document.createElement('div');
    thumbnailHTML.className += "thumbnail object-cover";
    let aHTML = document.createElement('a');
    aHTML.href = "#";
    let imgHTML = document.createElement('img');
    imgHTML.src = decode_img(p.image);
    let itemContentHTML = document.createElement('div');
    itemContentHTML.className += "item-content";
    let pHTML = document.createElement('p');
    let a2HTML = document.createElement('a');
    a2HTML.href = "#";
    a2HTML.innerHTML = p.name;
    let spanHTML = document.createElement('span');
    spanHTML.className += "price";
    let span2HTML = document.createElement('span');
    span2HTML.innerHTML = USDollar.format(p.total.toFixed(0));
    let span3HTML = document.createElement('span');
    span3HTML.className += "fly-item";
    let span4HTML = document.createElement('span');
    span4HTML.innerHTML = 'X'+ p.count;
    let a3HTML = document.createElement('div');
    a3HTML.className += "item-remove";
    let iHTML = document.createElement('i');
    iHTML.className += "ri-close-line";
     
    a3HTML.appendChild(iHTML);
    span3HTML.appendChild(span4HTML);
    spanHTML.appendChild(span2HTML);
    spanHTML.appendChild(span3HTML);
    pHTML.appendChild(a2HTML);
    itemContentHTML.appendChild(pHTML);
    itemContentHTML.appendChild(spanHTML);
    aHTML.appendChild(imgHTML);
    thumbnailHTML.appendChild(aHTML);
    liProductHTML.appendChild(thumbnailHTML);
    liProductHTML.appendChild(itemContentHTML);
    liProductHTML.appendChild(a3HTML);
    products.appendChild(liProductHTML);
});

const cartTotal = document.querySelector(".cart-total");
const subTotal =  document.querySelector(".subtotal");
let total=0;

localGetOut.forEach((p)=>{
   total += p.total;
})

cartTotal.innerHTML=`
  $ ${USDollar.format(total.toFixed(0))}
`;
subTotal.innerHTML =`
<p>Subtotal</p>
<p><strong class="">${USDollar.format(total.toFixed(0))}</strong></p>
`;
const deleteCartBtn = document.querySelectorAll(".item-remove");
deleteCartBtn.forEach( b =>{
  b.addEventListener('click', (e) => {
    console.log(e.target.parentElement.parentElement.id);
    let itemTrash = parseInt(e.target.parentElement.parentElement.id);
    let indexDelete = localGetOut.findIndex(p => p.id === itemTrash);
    console.log(indexDelete);
    localGetOut.splice(indexDelete, 1);
    console.log(localGetOut);
    localStorage.setItem("carrito", JSON.stringify(localGetOut));
    renderCart();
  })
 })
}
