<?php 

$is_prime;

// var_dump(isset($is_prime)) ;  /// false

function is_prime($number){
    global $is_prime;
    if ($number == 1) {
        $is_prime = "1 is neither prime nor composite.";
    }
    for ($i=2; $i < $number; $i++) { 
        if ($number % $i === 0) {
            $is_prime = "No";
        }
    }
    if (isset($is_prime) === false) {
        $is_prime = "Yes";
    }
    return $is_prime;
}
echo is_prime(2);









?>