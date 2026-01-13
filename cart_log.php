1. Start session

php
<?php
session_start();

if (!isset(_SESSION['cart']))_SESSION['cart'] = [];
}
?>


---

2. Add to Cart (add_to_cart.php)

php
<?php
require 'session.php';

if (isset(_POST['product_id']))product_id = _POST['product_id'];

    // Add product to cart
    if (!in_array(product_id, _SESSION['cart']))_SESSION['cart'][] = product_id;
        echo "Product added to cart.";
     else 
        echo "Product already in cart.";
     else 
    echo "No product selected.";

?>
3. Remove from Cart (remove_from_cart.php)*

“`php
<?php
require 'session.php';

if (isset(_POST['product_id'])) {
    product_id =_POST['product_id'];

    // Remove product
    if ((key = array_search(product_id, _SESSION['cart'])) !== false) 
        unset(_SESSION['cart'][key]);
        echo "Product removed from cart.";
     else 
        echo "Product not found in cart.";
     else 
    echo "No product selected.";

?>
“`

—

*4. View Cart (view_cart.php)*

“`php
<?php
require 'session.php';

echo "Cart Items: ";
print_r(_SESSION['cart']);
?>

