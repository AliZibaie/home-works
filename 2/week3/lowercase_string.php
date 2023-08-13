<?php 

$is_lowercase;

function is_lowercase($string){
    global $is_lowercase;
    if ($string === strtolower($string)) {
        $is_lowercase = true;
    }else{
        $is_lowercase = false;        
    }
    return $is_lowercase;
}
var_dump(is_lowercase("ali"));











?>