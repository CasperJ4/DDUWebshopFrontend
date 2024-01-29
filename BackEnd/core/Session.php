<?php

class Session
{
    public static function addToCart($productId, $quantity)
    {
        if (!self::exists('cart')) {
            self::put('cart', []);
        }

        $cart = self::get('cart');
        if (isset($cart[$productId])) {
            $cart[$productId] += $quantity;
        } else {
            $cart[$productId] = $quantity;
        }

        self::put('cart', $cart);
    }

    public static function removeFromCart($productId)
    {
        if (self::exists('cart')) {
            $cart = self::get('cart');
            if (isset($cart[$productId])) {
                unset($cart[$productId]);
                self::put('cart', $cart);
            }
        }
    }
    public static function exists($name)
    {
        return (isset($_SESSION[$name])) ? true : false;
    }

    public static function put($name, $value)
    {
        return $_SESSION[$name] = $value;
    }

    public static function get($name)
    {
        return $_SESSION[$name];
    }

    public static function delete($name)
    {
        if (self::exists($name)) {
            unset($_SESSION[$name]);
        }
    }

    public static function flash($name, $string = '')
    {
        if (self::exists($name)) {
            $session = self::get($name);
            self::delete($name);
            return $session;
        } else {
            self::put($name, $string);
        }
    }
}
