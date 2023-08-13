<?php
 require_once "includes/includes.php";
/*
$park = new parking('test');
$park->setName();
$park->setOpenTime("14:00");
$park->setCloseTime("20:00");
$park->setNumberOfFloor(4);
$park->setFloorCapacity([13,56,21,42,23]);
$park->setRemainCapacity();



echo "<pre>";
var_dump($park);
echo "</pre>";
*/

$rent = new rent(125, 4, 6, "bolbol2", "motor");
$rent->calMainLocation();
$rent->setEnterTime();
// $rent->saveData() ;
 $rent->removeRent();


echo "<pre>";
var_dump($rent);
echo "</pre>";


?>
















