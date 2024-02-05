<?php
class Products
{
    private static $db;
    private static $table = 'wsproducts'; 

    public static function init()
    {
        self::$db = Database::getInstance();
    }

    public static function create($fields)
    {
        if (!self::$db->insert(self::$table, $fields)) {
            throw new Exception("Unable to create the product.");
        }
    }

    public static function getAllProducts()
    {
        $db = Database::getInstance();
        return $db->get(self::$table);
    } 

    public static function getProductById($product_id)
    {
        // Ensure that the $db property is initialized before using it
        if (!self::$db) {
            self::init();
        }

        $products = self::$db->get(self::$table, "product_id = :product_id", ['product_id' => $product_id]);
        return $products ? $products[0] : null;
    }

    public static function updateProduct($product_id, $fields)
    {
        if (!self::$db->update(self::$table, $fields, "product_id = :product_id", ['product_id' => $product_id])) {
            throw new Exception("Unable to update the product.");
        }
    }

    public static function deleteProduct($product_id)
    {
        if (!self::$db->delete(self::$table, "product_id = :product_id", ['product_id' => $product_id])) {
            throw new Exception("Unable to delete the product.");
        }
    }
}
