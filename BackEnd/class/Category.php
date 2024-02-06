<?php
class Category
{
    private static $db;
    private static $table = 'wscategory';

    public static function init()
    {
        self::$db = Database::getInstance();
    }

    public static function getCategories()
    {
        $db = Database::getInstance();
        return $db->get(self::$table);
    }
}

