<?php
require_once 'BackEnd/core/init.php'; 
// Array to store products
$products = Products::getAllProducts();

$data = array();
foreach ($products as $row) {
    $data[] = array(
        'product_id' => $row['product_id'],
        'product_name' => $row['product_name'],
        'product_description' => $row['product_description'],
        'product_stock' => $row['product_stock'],
        'product_image_url' => $row['product_image_url'],
        'created_at' => $row['created_at'],
    );
}

