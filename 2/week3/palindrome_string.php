<?php 


$reverse_string = "";

function reverse_string($string){
    global $reverse_string;
    for ($i=strlen($string) - 1; $i >= 0 ; $i--) { 
        $reverse_string = $reverse_string.$string[$i];
    }
    return $reverse_string;
}

$is_palindrome;
function palindrome_string($string){
    if (reverse_string($string) == $string) {
        $is_palindrome = true;
    }else{
        $is_palindrome = false;
    }
    return $is_palindrome;
}
var_dump(palindrome_string("bolbol"))






?>