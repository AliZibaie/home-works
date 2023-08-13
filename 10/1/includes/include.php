<?php
spl_autoload_register("autoLoader");
function autoLoader($className) : void
{
    require_once "classes/$className.php";
}