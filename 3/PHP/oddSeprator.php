<?php 



function oddSeprator(...$number){
    $oddNumbers = [];
    foreach ($number as $num) {
        if ($num % 2 == 1) {
                array_push($oddNumbers, $num);
                $oddNumbers[] = $num;
        }
    }
    // sort($oddNumbers);
    return $oddNumbers;
}

echo "<pre>";
var_dump(oddSeprator(1, 2, 3, 4, 5, 15, 21, 6, 7, 8, 9, 10, 11)) ;
echo "</pre>"; 









?>