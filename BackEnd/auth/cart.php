<?php
require_once 'BackEnd/core/init.php';
$db = Database::getInstance();
Products::init();

if (isset($_POST['product_id'], $_POST['quantity']) && is_numeric($_POST['product_id']) && is_numeric($_POST['quantity'])) {
    // Set the post variables so we easily identify them, also make sure they are integers
    $product_id = $_POST['product_id'];
    $quantity = $_POST['quantity'];

    try {
        // Create an instance of the Cart class and pass the PDO connection
        $cart = new Cart($db);

        // Add the product to the cart
        $cart->addToCart($product_id, $quantity);

        // Prevent form resubmission...
        header('location: index.php?page=cart');
        exit;
    } catch (PDOException $e) {
        // Handle database connection errors here.
        echo 'Database error: ' . $e->getMessage();
    }
}

// Print session
print_r($_SESSION);
