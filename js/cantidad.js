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
      carContent[index].totalWithOutDiscount= carContent[index].count * carContent[index].price; 

    } else{
      let temTotal = precio_producto * userInputNumber;
      carContent.push({
        id: parseInt(id_prod),
        name: nombre_producto,
        price: parseInt(precio_producto),
        count: userInputNumber,
        image: img_producto_frente,
        total: temTotal - ((oferta_producto * temTotal)/100),
        discount: oferta_producto,
        totalWithOutDiscount: temTotal,
      })
    }
    localStorage.setItem("carrito", JSON.stringify(carContent));
    renderCart();
    // const localSavage = JSON.parse(localStorage.getItem("carrito")) || [];
  }
});


