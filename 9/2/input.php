<?php

class Input {
    public static function exists($type = 'post') {
        $type = strtoupper($type);
        $method = "_$type";
        if ($$method == '$_GET' || $$method == '$_POST'){
            return true;
        }return false;

    }

    public static function get($item) {
        // ToDo : چک میکنه ببینه اینپوتی با اسم مورد نظر براش ارسال شده یا نه که اگه ارسال شده باید مقدار آن برگشت داده شود
        if (isset($_POST[$item])){
            return  $_POST[$item];
        }elseif (isset($_GET[$item])){
            return $_GET[$item];
        }else{
            return null;
        }
    }
}