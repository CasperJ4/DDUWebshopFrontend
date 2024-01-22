<?php
require_once 'BackEnd/core/init.php';
Products::init();

$product_id = $_GET['product_id'] ?? $_POST['product_id'] ?? null;
$product = null;

if ($_SERVER['REQUEST_METHOD'] == 'POST' && $product_id) {
    try {
        Products::updateProduct($product_id, [
            'product_name' => $_POST['product_name'],
            'product_description' => $_POST['product_description'],
            'product_stock' => $_POST['product_stock'],
            // Add other fields as necessary
        ]);
        header("Location: edit.php?product_id=" . $product_id); // Redirect to the same page with the updated product
        exit;
    } catch (Exception $e) {
        $error = $e->getMessage();
    }
} elseif ($product_id) {
    $product = Products::getProductById($product_id);
    if (!$product) {
        echo "Product not found";
        exit;
    }
} else {
    // Handle the case where $product_id is not provided
    echo "Please select a product to edit.";
    exit;
}
