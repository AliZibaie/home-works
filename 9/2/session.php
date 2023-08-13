<?php

class Session {
    public static function exists($name) {
        return ($_SESSION[$name] ?? null);
    }

    public static function put($name, $value) {
         $_SESSION[$name] = $value;
    }

    public static function get($name) {
        if (self::exists($name)){
            return $_SESSION[$name];
        }
        return null;
    }

    public static function delete($name) : bool{
         if (self::exists($name)){
//             $removedName = self::get($name);
//             unset($removedName);
             unset($_SESSION[$name]);
             return "$name has removed successfully";
         }
         return "$name not found";
    }

    public static function flash ($name, $string = 'null') {
        if (self::exists($name)){
            $value = self::get($name);
            self::delete($name);
            return $value;
        // در صورتی که سشن به اسم مورد نظر وجود داشت ، مقدار سشن رو برمیگردونه و خود سسشن رو پاک میکنه
        // در صورتی که سشن وجود نداشت یک سشن به اسم $name و مقدار $string میسازه
    }
        return self::put($name,$string);
}
}
