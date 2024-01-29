<?php
class Products
{
    private static $db;

    public static function init()
    {
        self::$db = Database::getInstance();
    }

    public static function create($fields)
    {
        if (!self::$db->insert('wsproducts', $fields)) {
            throw new Exception("Unable to create the product.");
        }
    }

    public static function getAllProducts()
    {
        $db = Database::getInstance();
        return $db->get('wsproducts');
    }

    public static function getProductById($product_id)
    {
        // Ensure that the $db property is initialized before using it
     

        $products = self::$db->get('wsproducts', "product_id = :product_id", ['product_id' => $product_id]);
        return $products ? $products[0] : null;
    }

    public static function updateProduct($product_id, $fields)
    {
        if (!self::$db->update('wsproducts', $fields, "product_id = :product_id", ['product_id' => $product_id])) {
            throw new Exception("Unable to update the product.");
        }
    }

    public static function deleteProduct($product_id)
    {
        if (!self::$db->delete('wsproducts', "product_id = :product_id", ['product_id' => $product_id])) {
            throw new Exception("Unable to delete the product.");
        }
    }
}
