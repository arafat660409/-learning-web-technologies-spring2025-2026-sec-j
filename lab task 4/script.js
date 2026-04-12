const unitPrice = 1000;

const quantityInput = document.getElementById("quantity");
const totalPriceInput = document.getElementById("totalPrice");

quantityInput.addEventListener("input", function(){

    let quantity = parseInt(quantityInput.value);

    // Prevent negative value
    if(quantity < 0){
        quantity = 0;
        quantityInput.value = 0;
        alert("Quantity cannot be negative!");
    }

    let total = unitPrice * quantity;

    totalPriceInput.value = total;

    // Gift coupon alert
    if(total > 1000){
        alert("Congratulations! You are eligible for a gift coupon.");
    }

});