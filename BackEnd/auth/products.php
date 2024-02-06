<?php
require_once 'BackEnd/core/init.php';

// Fetch categories and create a map of category IDs to names
$categories = Category::getCategories();
$categoryMap = [];
foreach ($categories as $category) {
    $categoryMap[$category['id']] = $category['name'];
}

// Fetch products and augment data with category names
$products = Products::getAllProducts();
$data = [];
foreach ($products as $row) {
    $categoryName = isset($categoryMap[$row['category_id']]) ? $categoryMap[$row['category_id']] : 'No Category';
    $data[] = [
        'product_id' => $row['product_id'],
        'product_name' => $row['product_name'],
        'product_description' => $row['product_description'],
        'product_stock' => $row['product_stock'],
        'product_image_url' => $row['product_image_url'],
        'created_at' => $row['created_at'],
        'category_id' => $row['category_id'],
        'category_name' => $categoryName,
    ];






    $selectedCategory = $_GET['category'] ?? 'all'; // Get the selected category from URL, default to 'all'

    // Modify this to fetch products based on selected category
    // This is a simplistic approach, you'll likely need to adjust it based on your actual database schema and methods
    if ($selectedCategory == 'all') {
        $products = Products::getAllProducts(); // Fetch all products if 'ALL' is selected
    } else {
        $products = Products::getProductsByCategory($selectedCategory); // You'll need to implement this method based on your needs
    }
}

// Now, $data contains all products with their category names included

