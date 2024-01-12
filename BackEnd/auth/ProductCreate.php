<?php
require_once 'BackEnd\core\init.php'; // Include the Database class file

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $productName = $_POST['product_name'];
    $productDescription = $_POST['product_description'];
    $productStock = $_POST['product_stock'];
    $productPriceDkk = $_POST['product_price_dkk'];
    $productDiscountPercentage = $_POST['product_discount_percentage'];

    // Connect to Database
    $db = Database::getInstance();

    // Prepare product data
    $productData = [
        'product_name' => $productName,
        'product_description' => $productDescription,
        'product_stock' => $productStock,
        'product_price_dkk' => $productPriceDkk,
        'product_discount_percentage' => $productDiscountPercentage,
        'product_net_price' => (1 - ($productDiscountPercentage / 100)) * $productPriceDkk // Calculate net price
    ];

    // Insert product into database
    try {
        $db->insert('wsproducts', $productData);
        echo "Product added successfully!";
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>

