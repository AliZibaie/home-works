<?php 
$upperLetters = ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z"];
$lowerLetters = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"];

function crypto(string $string){
    global $lowerLetters;
    global $upperLetters;
    $sameLetter = "";
    $Xi = 0 ;
    $Ai = 0 ;
    $newLetter = "";
    $newString = "";
    for ($i=0; $i < strlen($string); $i++) { 
        //  for uppercases
        foreach ($upperLetters as $key => $value) {
            if ($value == $string[$i]) {
                $sameLetter = $value;
                $Ai = $key;
                for ($j=0; $j < strlen($string); $j++) { 
                    if ($sameLetter == $string[$j]) {
                       $Xi++;
                    }
                }
                $newLetter = ((($Ai * $Xi) + 1) % 26);
                foreach ($upperLetters as $key3 => $value3) {
                    if ($key3 == $newLetter) {
                        $newString .= $value3;
                    }
                }
                $Ai = 0;
                $Xi = 0;
            }
        }
        // for lowercases
        foreach ($lowerLetters as $key => $value) {
            if ($value == $string[$i]) {
                $sameLetter = $value;
                $Ai = $key;
                for ($j=0; $j < strlen($string); $j++) { 
                    if ($sameLetter == $string[$j]) {
                       $Xi++;
                    }
                }
                $newLetter = ((($Ai * $Xi) + 1) % 26);
                foreach ($lowerLetters as $key3 => $value3) {
                    if ($key3 == $newLetter) {
                        $newString .= $value3;
                    }
                }
                $Ai = 0;
                $Xi = 0;
            }
        }
    }
    return $newString;
}
echo crypto("Abbaabss");







































?>