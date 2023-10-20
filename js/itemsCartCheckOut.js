let cartCheckOut = JSON.parse(localStorage.getItem("carrito")) || [];
const bodyCheckProducts = document.querySelector("#bodyCheckProduct");
const priceSubtotal= document.querySelector("#priceSubtotal");
const priceOffertDiscount= document.querySelector("#priceOffertDiscount");
const totalPurchase= document.querySelector("#totalPurchase");
let totalPurchaseValue = 0;
let totalWithOutDiscountValue = 0;
let totalDiscount = 0;
function renderCheckOut(data) {
    bodyCheckProducts.innerHTML = "";   
    data.forEach(c => {
        let child = `<tr id="${c.id}">
        <td class="flexitem">
            <div class="thumbnail object-cover">
                <a href="detailView.php?index=${c.id}"><img src="${decode_img(c.image)}" alt=""></a>
            </div>
            <div class="content">
                <strong><a href="detailView.php?index=${c.id}">${c.name}</a></strong>
            </div>
        </td>
        <td>${ USDollar.format(c.price)}</td>
        <td>
            <div class="qty-control flexitem">
                <button class="minusCheckout">-</button>
                <input class="input_number" type="text" value="${c.count}" min="1">
                <button class="plusCheckout">+</button>
            </div>
        </td>
        <td>${ USDollar.format(c.totalWithOutDiscount)}</td>
        <td><a href="" class="removeProduct"><i class="ri-close-line"></i></a></td>
    </tr>`;
    bodyCheckProducts.innerHTML += child;
    totalPurchaseValue = data.reduce((a, p) => a + p.total, 0);
    totalWithOutDiscountValue = data.reduce((a, p) => a + p.totalWithOutDiscount, 0);
    totalDiscount = totalWithOutDiscountValue - totalPurchaseValue;

    console.log(totalWithOutDiscountValue);
    console.log(totalPurchaseValue);
    console.log(totalDiscount);

    totalPurchase.innerHTML = USDollar.format(totalPurchaseValue);
    priceOffertDiscount.innerHTML = USDollar.format(totalDiscount);
    priceSubtotal.innerHTML = USDollar.format(totalWithOutDiscountValue);  
});
}
renderCheckOut(cartCheckOut);
const minusCheckout = document.querySelectorAll(".minusCheckout");
const inputNumberCheckout = document.querySelectorAll(".input_number");
const plusCheckout = document.querySelectorAll(".plusCheckout");
const itemRemoveCheckout = document.querySelectorAll(".removeProduct");
let valueCheckOut = 0;

plusCheckout.forEach((p, index) => {
    p.addEventListener("click", (e) => {
    //   e.preventDefault();
      let valueCheckOut = parseInt(inputNumberCheckout[index].value);
      valueCheckOut++;
      inputNumberCheckout[index].value = valueCheckOut;
    //   cartCheckOut
      let itemUpdate = parseInt(e.target.parentElement.parentElement.parentElement.id);
       cartCheckOut = cartCheckOut.map(p => {
        if(p.id === itemUpdate){
            p.count = valueCheckOut;
            p.totalWithOutDiscount = p.count * p.price;
            p.total = p.totalWithOutDiscount - ((p.discount * p.totalWithOutDiscount)/100)
            
        }
        return p;
      });
      localStorage.setItem("carrito", JSON.stringify(cartCheckOut));
      cartCheckOut = JSON.parse(localStorage.getItem("carrito")) || [];
      renderCheckOut(cartCheckOut);
    });
  });
  
  minusCheckout.forEach((m, index) => {
    m.addEventListener("click", (e) => {
    //   e.preventDefault();
      let valueCheckOut = parseInt(inputNumberCheckout[index].value);
      valueCheckOut--;
      if (valueCheckOut < 1) {
        valueCheckOut = 1;
        
      }
      inputNumberCheckout[index].value = valueCheckOut;
      let itemUpdate = parseInt(e.target.parentElement.parentElement.parentElement.id);
      cartCheckOut = cartCheckOut.map(p => {
       if(p.id === itemUpdate){
           p.count = valueCheckOut;
           p.totalWithOutDiscount = p.count * p.price;
            p.total = p.totalWithOutDiscount - ((p.discount * p.totalWithOutDiscount)/100)
       }
       return p;
     });
     localStorage.setItem("carrito", JSON.stringify(cartCheckOut));
     cartCheckOut = JSON.parse(localStorage.getItem("carrito")) || [];
     renderCheckOut(cartCheckOut);
    });
  });

  itemRemoveCheckout.forEach( b =>{
    b.addEventListener('click', (e) => {
      console.log("entre a evento");
      console.log(e.target.parentElement.parentElement.parentElement.id);
      let itemTrash = parseInt(e.target.parentElement.parentElement.parentElement.id);
      let indexDelete = cartCheckOut.findIndex(p => p.id === itemTrash);
      cartCheckOut.splice(indexDelete, 1);
      localStorage.setItem("carrito", JSON.stringify(cartCheckOut));
      cartCheckOut = JSON.parse(localStorage.getItem("carrito")) || [];
      renderCart();
      renderCheckOut(cartCheckOut);
    })
   })





  
  