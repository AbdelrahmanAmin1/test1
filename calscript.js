const menuPrices = {
    "Caffeinated Canvas Signature Latte": 10.99,
    "Decadent Mocha": 12.99,
    "Classic Cappuccino": 9.99,
    "Hot Chocolate": 14.99,
    "Artisan Flat White": 12.99,
    "Velvet Macchiato": 10.99
};


const pastryPrices = {
    "Canvas Cookies": 4.99,
    "Canvas Cupcakes": 7.99,
    "Canvas Tarte": 10.99,
    "Canvas Cheesecake": 12.99,
    "Canvas Crepe": 19.99,
    "Canvas Croissant": 10.99
};
function calculateTotalPrice(itemPrices, items) {
    let totalPrice = 0;
  
    // Iterate through the items array
    for (const item of items) {
      // Check if the item exists in the itemPrices object
      if (itemPrices.hasOwnProperty(item)) {
        totalPrice += itemPrices[item];
      } else {
        console.log(`${item} is not found in the list of items.`);
      }
    }
  
    return totalPrice;
  }
  