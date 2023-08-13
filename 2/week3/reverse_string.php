<?php 


$reverse_string = "";

function reverse_string($string){
    global $reverse_string;
    for ($i=strlen($string) - 1; $i >= 0 ; $i--) { 
        $reverse_string = $reverse_string.$string[$i];
    }
    return $reverse_string;
}
echo reverse_string("bolbol");








?>