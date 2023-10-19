function renderCart (){
    const localGetOut = JSON.parse(localStorage.getItem("carrito")) || [];
    let numProducts = document.querySelector(".num-products");
    let products = document.querySelector(".products");
    let cartNotification = document.querySelector(".item-number-cart");
  
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
   ${USDollar.format(total.toFixed(0))}
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