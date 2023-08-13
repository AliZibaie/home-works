<?php 

$number2 = [];

function sort_array(...$number){
    global $number2;
    foreach ($number as $num) {
        array_shift($number);
        foreach ($number as $num2) {
            if ($num < $num2) {
                 array_push($number2, $num);
            }
        }
    }
    return $number2;
    
}



echo "<pre>";
var_dump(sort_array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10,23,0));
echo "</pre>";






?>