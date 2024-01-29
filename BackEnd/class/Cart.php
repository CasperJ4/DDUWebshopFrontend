<?php
class Cart
{
    private $db;

    // Constructor to initialize the cart with a database connection
    public function __construct($db)
    {
        $this->db = $db;

        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = [];
        }
    }

    // Method to add a product to the cart
    public function addToCart($productId, $quantity = 1)
    {
        // Check if the product is already in the cart
        if (isset($_SESSION['cart'][$productId])) {
            // If it is, update the quantity
            $_SESSION['cart'][$productId] += $quantity;
        } else {
            // If it's not, add it to the cart
            $_SESSION['cart'][$productId] = $quantity;
        }
    }
}
