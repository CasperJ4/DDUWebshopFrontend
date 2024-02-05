<?php
require_once 'BackEnd/core/init.php'; // Include the Database class file

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $productName = $_POST['product_name'];
    $productDescription = $_POST['product_description'];
    $productStock = $_POST['product_stock'];
    $productPriceDkk = $_POST['product_price'];

    // Check if a file has been uploaded
    if (isset($_FILES['product_image']) && $_FILES['product_image']['error'] === UPLOAD_ERR_OK) {
        // Get the uploaded file information
        $fileName = $_FILES['product_image']['name'];
        $fileTmpName = $_FILES['product_image']['tmp_name'];

        // Define the upload directory
        $uploadDir = 'uploads/';

        // Generate a unique file name
        $uniqueFileName = uniqid() . '_' . $fileName;

        // Set the path to store the uploaded file
        $uploadPath = $uploadDir . $uniqueFileName;

        // Move the uploaded file to the destination directory
        if (move_uploaded_file($fileTmpName, $uploadPath)) {
            // File uploaded successfully, proceed to insert product data into the database

            // Connect to Database
            $db = Database::getInstance();

            // Prepare product data with the image URL
            $productData = [
                'product_name' => $productName,
                'product_description' => $productDescription,
                'product_stock' => $productStock,
                'product_price' => $productPriceDkk,
                'product_image_url' => $uploadPath, // Store the image URL in the database
            ];

            // Insert product into the database
            try {
                $db->insert('wsproducts', $productData);
                echo "Product added successfully!";
            } catch (Exception $e) {
                echo "Error: " . $e->getMessage();
            }
        } else {
            echo "Error uploading the file.";
        }
    } else {
        echo "No file uploaded or an error occurred during upload.";
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete_product'])) {
        $productId = $_POST['delete_product'];

        // Delete product from the database
        try {
            $db->delete('wsproducts', ['id', '=', $productId]);
            echo "Product deleted successfully!";
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}

// Delete product
