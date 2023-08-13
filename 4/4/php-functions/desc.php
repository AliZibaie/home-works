<?php 

$decodedJson = json_decode(file_get_contents("json/info.json"), true);

function descSort($arr){
    $age = [];
    $sorted = [];
    foreach ($arr as $key => $value) {
        $age[] = $value["age"];
    }
    rsort($age);
    foreach ($age as $ages) {
        foreach ($arr as $key => $value) {
            if (isset($arr[$key]["age"]) && $ages == $value["age"]) {
                $sorted[] = $value;
                $arr[$key] = 0;
            }
        }
    }
    return $sorted;
}

?>