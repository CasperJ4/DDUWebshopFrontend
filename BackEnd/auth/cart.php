<?php
require_once 'BackEnd/core/init.php';

if (isset($_POST['add_to_cart'])) {
    $productId = $_POST['product_id'];
    $quantity = $_POST['quantity'];
    Session::addToCart($productId, $quantity);
}
if (isset($_POST['remove_from_cart'])) {
    $productId = $_POST['product_id'];
    Session::removeFromCart($productId);
}