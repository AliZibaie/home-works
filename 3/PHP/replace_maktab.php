<?php 

function replace_maktab(string $string, string $search, string $replace){
    $k = 0;
    $string2 = $string;
    $string3 = "";
    for ($j=0; $j < strlen($string) - strlen($search) + 1; $j++) { 
        $slice = "";
        for ($i=0; $i < strlen($search); $i++) { 
            if (strlen($string2) != 0) {
                $slice .= $string2[$i];
            }else{
                break;
            }
        }
        if (trim($slice) == $search) {
             $string3 = substr($string, 0, $j).$replace.substr($string, $j + strlen($search), strlen($string) - strlen($search));
             $k++;
             if ($k > 1) {
                $string3 = replace_maktab($string3, $search, $replace);
             }
        }
        if (strlen($string2) != 0) {
            $string2 = substr($string2, 1);
        }else{
            break;
        }
    }
      return $string3;
}

echo replace_maktab("Hi my name bolbol is Ali  Ali  Ali bolbol", "Ali", "John");
























?>