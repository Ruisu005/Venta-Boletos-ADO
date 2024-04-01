document.addEventListener("DOMContentLoaded", function() {
    const finalCartList = document.getElementById("final-cart-list");
    const cartItems = JSON.parse(localStorage.getItem("cartItems"));
    let totalAmount = 0;

    Object.entries(cartItems).forEach(([productName, {price, quantity}]) => {
        const listItem = document.createElement('li');
        listItem.textContent = `${productName} - Cantidad: ${quantity} - Total: $${(price * quantity).toFixed(2)}`;
        finalCartList.appendChild(listItem);
        totalAmount += price * quantity;
    });

    const totalElement = document.getElementById("total");
    totalElement.textContent = `Total a pagar: $${totalAmount.toFixed(2)}`;
});