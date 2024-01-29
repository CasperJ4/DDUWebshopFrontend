<?php
require_once 'BackEnd/core/init.php';
Products::init();

$product_id = $_GET['product_id'] ?? $_POST['product_id'] ?? null;
$product = null;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['delete_product'])) {
        // Delete product logic
        try {
            $productId = $_POST['delete_product'];
            Products::deleteProduct($productId);
            $_SESSION['delete-success'] = "Product deleted successfully!";
            Redirect::to('adminp.php');
            exit;
        } catch (Exception $e) {
            $error = $e->getMessage();
        }
    } elseif (isset($_POST['update_product'])) {
        // Update product logic
        try {
            Products::updateProduct($product_id, [
                'product_name' => $_POST['product_name'],
                'product_description' => $_POST['product_description'],
                'product_stock' => $_POST['product_stock'],
                // Add other fields as necessary
            ]);
            $_SESSION['update-success'] = "Product successfully updated.";
            Redirect::to('edit.php?product_id=' . $product_id);
            exit;
        } catch (Exception $e) {
            $error = $e->getMessage();
        }
    }
} elseif ($product_id) {
    // Fetch product details
    $product = Products::getProductById($product_id);
    if (!$product) {
        echo "Product not found";
        exit;
    }
} else {
    echo "Please select a product to edit.";
    Redirect::to('adminp.php');
    exit;
}

// Other script content...
