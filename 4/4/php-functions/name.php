<?php 

$decodedJson = json_decode(strtolower(file_get_contents("json/info.json")), true);

function nameSort($arr){
    $name = [];
    $sorted = [];
    foreach ($arr as $key => $value) {
        $name[] = $value["name"];
    }
    sort($name);
    foreach ($name as $names) {
        foreach ($arr as $key => $value) {
            if (isset($arr[$key]["name"]) && $names == $value["name"]) {
                $sorted[] = $value;
                $arr[$key] = "";
            }
        }
    }
    return $sorted;
}

?>