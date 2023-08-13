<?php
spl_autoload_register("autoLoader");
function autoLoader($className) : void
{
    $folder = ["A", "B", "C", "mainProperties", "optionalProperties"];
    foreach ($folder as $key => $folders){
        if (file_exists("$folders/$className.php")){
            require_once "$folders/$className.php";
        }

    }


}

