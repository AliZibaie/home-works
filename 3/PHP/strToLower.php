<?php 

$letters = [
    "A" => "a",
    "B" => "b",
    "C" => "c",
    "D" => "d",
    "E" => "e",
    "F" => "f",
    "G" => "g",
    "H" => "h",
    "I" => "i",
    "J" => "j",
    "K" => "k",
    "L" => "l",
    "M" => "m",
    "N" => "n",
    "O" => "o",
    "P" => "p",
    "Q" => "q",
    "R" => "r",
    "S" => "s",
    "T" => "t",
    "U" => "u",
    "V" => "v",
    "W" => "w",
    "X" => "x",
    "Y" => "y",
    "Z" => "z",
];




function strToLowerMaktab($str){
    global $letters;
    $i = 0;
    for ($i=0; $i < strlen($str); $i++) { 
        foreach ($letters as $key => $value) {
            $key == $str[$i] ? $str[$i] = $value: null;
            }
        }
    return $str;
}

echo strToLowerMaktab("Hi my name is Ali");

// strtolower($str);







?>