document.addEventListener('DOMContentLoaded', function() {
    const addToCartButtons = document.getElementsByClassName('add-to-cart');
    const cartItemsContainer = document.getElementById('cart-items');
    const cartTotal = document.getElementById('cart-total');
    const clearCartButton = document.getElementById('clear-cart');
    let cart = [];
  
    // Función para agregar un producto al carrito
    function addToCart(event) {
      const button = event.target;
      const item = button.parentNode;
      const itemId = item.dataset.id;
      const itemName = item.dataset.name;
      const itemPrice = parseFloat(item.dataset.price);
  
      // Verificar si el producto ya está en el carrito
      const existingItem = cart.find(item => item.id === itemId);
      if (existingItem) {
        existingItem.quantity++;
      } else {
        cart.push({
          id: itemId,
          name: itemName,
          price: itemPrice,
          quantity: 1
        });
      }
  
      updateCart();
    }
  
    // Función para actualizar el contenido del carrito
    function updateCart() {
      cartItemsContainer.innerHTML = '';
      let totalPrice = 0;
  
      cart.forEach(item => {
        const cartItem = document.createElement('li');
        cartItem.className = 'cart-item';
        cartItem.innerHTML = `${item.name} - $${item.price.toFixed(2)} x ${item.quantity}
          <button class="remove-from-cart" data-id="${item.id}">Eliminar</button>`;
        cartItemsContainer.appendChild(cartItem);
  
        totalPrice += item.price * item.quantity;
      });
  
      cartTotal.textContent = `$${totalPrice.toFixed(2)}`;
  
      // Asignar el evento para eliminar un producto del carrito
      const removeButtons = document.getElementsByClassName('item-remove');
      for (const button of removeButtons) {
        button.addEventListener('click', removeFromCart);
      }
    }
  
    // Función para eliminar un producto del carrito
    function removeFromCart(event) {
      const button = event.target;
      const itemId = button.dataset.id;
      const itemIndex = cart.findIndex(item => item.id === itemId);
  
      if (itemIndex !== -1) {
        cart.splice(itemIndex, 1);
      }
  
      updateCart();
    }
  
    // Función para vaciar el carrito
    function clearCart() {
      cart = [];
      updateCart();
    }
  
    // Asignar el evento para agregar un producto al carrito
    for (const button of addToCartButtons) {
      button.addEventListener('click', addToCart);
    }
  
    // Asignar el evento para vaciar el carrito
    clearCartButton.addEventListener('click', clearCart);
  });