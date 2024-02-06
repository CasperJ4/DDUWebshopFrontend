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
    public static function getCategoryById($id)
    {
        $db = Database::getInstance();
        return $db->get(self::$table, ['id', '=', $id]);
    }
}

