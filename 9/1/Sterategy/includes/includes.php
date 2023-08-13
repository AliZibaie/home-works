<?php
spl_autoload_register("autoloadFun");

function autoloadFun($className){
    $path = "classes/";
    $extension = ".class.php";
    $fullPath = $path.$className.$extension;
    include "$fullPath";
}