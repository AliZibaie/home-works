<?php 

$decodedJson = json_decode(strtolower(file_get_contents("json/info.json")), true);

function schoolSort($arr){
    $school = [];
    $sorted = [];
    foreach ($arr as $key => $value) {
        $school[] = $value["school"];
    }
    sort($school);
    foreach ($school as $schools) {
        foreach ($arr as $key => $value) {
            if (isset($arr[$key]["school"]) && $schools == $value["school"]) {
                $sorted[] = $value;
                $arr[$key] = "";
            }
        }
    }
    return $sorted;
}

?>