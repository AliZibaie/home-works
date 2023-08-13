<?php 



$factorial = 1;
function factorial($number){
    global $factorial;
    for ($i=0; $i < $number; $i++) {
        $factorial *= $number - $i;
    }
    return $factorial;
}
echo factorial(6);

/*
$factorial = 1;
function factorial($number){
    global $factorial;
    for ($i=$number; $i > 0; $i--){ 
        $factorial *= $i;
    }
    return $factorial;
}
echo factorial(5);
*/



























?>