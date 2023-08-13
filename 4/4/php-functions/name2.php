<?php 
/*
$decodedJson = json_decode(strtolower(file_get_contents("index.json")), true); 
function nameSort($arr){
    $names = [];
    $sorted = [];
    foreach ($arr as $key => $value) {
        preg_match_all("/\s\w+/", $value["name"], $name);
            $names[] = $name[0][0];
        }
    sort($names);
    foreach ($names as $familyName) {
        foreach ($arr as $key => $value) {
            if ($familyName == $value["name"]) {
                $sorted[] = $value;
                $arr[$key] = "";
            }
        }
    }
    return $sorted;
}
 echo "<pre>";
 var_dump(nameSort($decodedJson));
 echo "</pre>";


*/
 $decodedJson = json_decode(strtolower(file_get_contents("json/info.json")), true);

 function nameSort($arr){
     $name = [];
     $sorted = [];
     foreach ($arr as $key => $value) {
        preg_match_all("/\s\w+/", $value["name"], $names);
         $name[] = $names[0][0];
     }
     sort($name);
     foreach ($name as $familyName) {
         foreach ($arr as $key => $value) {
             if (isset($value["name"]) && str_contains($value["name"], $familyName)) {
                 $sorted[] = $value;
                 $arr[$key]["name"] = "";
             }
         }
     }
     return $sorted;
 }













?>