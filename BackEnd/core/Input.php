<?php

class Input
{
    /**
     * Check if a specific input field exists in the request.
     *
     * @param string $type The input type (e.g., 'get' or 'post').
     * @return bool True if the input exists, false otherwise.
     */
    public static function exists($type = 'post')
    {
        switch ($type) {
            case 'post':
                return (!empty($_POST)) ? true : false;
            case 'get':
                return (!empty($_GET)) ? true : false;
            default:
                return false;
        }
    }

    /**
     * Get the value of a specific input field from the request.
     *
     * @param string $key The name of the input field.
     * @return mixed|null The input value if it exists, null otherwise.
     */
    public static function get($key)
    {
        if (isset($_POST[$key])) {
            return $_POST[$key];
        } elseif (isset($_GET[$key])) {
            return $_GET[$key];
        }
        return null;
    }

    /**
     * Check if a specific input field is set and not empty.
     *
     * @param string $key The name of the input field.
     * @return bool True if the input is set and not empty, false otherwise.
     */
    public static function has($key)
    {
        return (isset($_POST[$key]) && !empty($_POST[$key])) || (isset($_GET[$key]) && !empty($_GET[$key]));
    }
}
