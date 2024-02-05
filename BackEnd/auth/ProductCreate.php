<?php
require_once 'BackEnd/core/init.php'; 
// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $productName = $_POST['product_name'];
    $productDescription = $_POST['product_description'];
    $productStock = $_POST['product_stock'];
    $productPriceDkk = $_POST['product_price'];

    // Connect to Database
    $db = Database::getInstance();

    // Prepare product data
    $productData = [
        'product_name' => $productName,
        'product_description' => $productDescription,
        'product_stock' => $productStock,
        'product_price' => $productPriceDkk,
    ];
    // Insert product into database
    try {
        $db->insert('wsproducts', $productData);
        echo "Product added successfully!";
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete_product'])) {
        $productId = $_POST['delete_product'];

        // Delete product from database
        try {
            $db->delete('wsproducts', ['id', '=', $productId]);
            echo "Product deleted successfully!";
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}

// Delete product

?>

