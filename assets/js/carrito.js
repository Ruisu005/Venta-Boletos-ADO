/*!
* Start Bootstrap - Shop Homepage v5.0.6 (https://startbootstrap.com/template/shop-homepage)
* Copyright 2013-2023 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-shop-homepage/blob/master/LICENSE)
*/
// This file is intentionally blank
// Use this file to add JavaScript to your project

document.addEventListener("DOMContentLoaded", function() {
    const addToCartButtons = document.querySelectorAll(".add-to-cart");
    const cartCount = document.getElementById("cart-count");
    const productList = document.getElementById("product-list");
    const cartList = document.getElementById("cart-list");
    const cartTotal = document.getElementById("cart-total");
    const cartModal = new bootstrap.Modal(document.getElementById('cartModal'));
    const payButton = document.getElementById("pay-button");
    let itemCount = 0;
    let total = 0;
    const cartItems = {};

    addToCartButtons.forEach(button => {
        button.addEventListener("click", function() {
            const product = this.closest('.card');
            const productName = product.querySelector('.fw-bolder').textContent;
            const productPrice = parseFloat(product.querySelector('.product-price').textContent.replace('$', ''));

            if (cartItems[productName]) {
                cartItems[productName].quantity++;
            } else {
                cartItems[productName] = {
                    price: productPrice,
                    quantity: 1
                };
                itemCount++;
            }

            total = Object.values(cartItems).reduce((acc, curr) => acc + curr.price * curr.quantity, 0);
            cartCount.textContent = itemCount;

            renderCart();
        });
    });

    const renderCart = () => {
        cartList.innerHTML = '';
        Object.entries(cartItems).forEach(([productName, {price, quantity}]) => {
            const listItem = document.createElement('li');
            listItem.classList.add('list-group-item');
            listItem.innerHTML = `
                <div class="product-details">
                    <span>${productName}</span>
                    <span>Cantidad: ${quantity}</span>
                    <span>Precio: $${(price * quantity).toFixed(2)}</span>
                </div>
            `;
            cartList.appendChild(listItem);
        });
        cartTotal.textContent = `Total: $${total.toFixed(2)}`;
    };

    payButton.addEventListener("click", function() {
        localStorage.setItem("cartItems", JSON.stringify(cartItems));
        window.location.href = "finalizarCompra.php";
    });

    const cartButton = document.getElementById("cart-button");
    cartButton.addEventListener("click", function() {
        cartModal.show();
    });
});