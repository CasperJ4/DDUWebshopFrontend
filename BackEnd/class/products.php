<?php

class Products
{

    public static function create($fields = array())
    {
        if (!Database::getInstance()->insert('wsproducts', $fields)) {
            throw new Exception("Unable to create the post.");
        }
    }

    public static function getAllProducts()
    {
        $Products = Database::getInstance()->get('wsproducts');
        return $Products;
    }


    public static function getChannelPosts($channel_id)
    {
        $Products = Database::getInstance()->get('wsproducts', array('channel_id', '=', $channel_id));
        //return list of posts
        return $Products;
    }



}
