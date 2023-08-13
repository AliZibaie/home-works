<?php


class Cookie {
    public static function exists($name ) : bool{
        return isset($_COOKIE[$name]);
    }

    public static function get($name) {
        if (self::exists($name)){
            return $_COOKIE[$name];
        }
        return null;
    }

    public static function put($name, $value, $expiry) {
        if(self::exists($name )) {
            setcookie($name, $value, time() + $expiry);
            return "cookie has set successfully!";
        }
        return null;
    }

    public static function delete($name) {
        self::put($name, '', 0);
    }
}