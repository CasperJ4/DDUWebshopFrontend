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
    public static function getProductsByCategory($categoryID)
    {
        if (!self::$db) {
            self::init();
        }
        // Adjusted to use the correct table name and proper parameter binding
        $products = self::$db->get(self::$table, "category_id = :category_id", ['category_id' => $categoryID]);
        return $products;
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
    public static function uploadImageToHostingService($imagepath)
    {
        $apikey = '6d207e02198a847aa98d0a2a901485a5';

        $apiurl = 'https://freeimage.host/api/1/upload';

        $requestData = [
            'key' => $apikey,
            'source' => $imagepath,
            'format' => 'json',
        ];

        if (file_exists($imagepath) && is_readable($imagepath)) {
            $requestData['source'] = new CURLFile($imagepath);
        } else {
            return false;
        }

        $ch  = curl_init();
        curl_setopt($ch, CURLOPT_URL, $apiurl);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $requestData);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        // Execute the cURL request
        $response = curl_exec($ch);

        // Close cURL session
        curl_close($ch);

        // Parse the JSON response
        $responseData = json_decode($response, true);

        // Check if the response contains an image URL
        if (isset($responseData['image']['url'])) {
            return ['url' => $responseData['image']['url']];
        } else {
            return false; // Image upload failed or no URL in response
        }
    }
}
