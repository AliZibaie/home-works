<?php
require_once "includes/include.php";
// velocity and acceleration
$components = new Components([2,1]);
// points
$point = new Point();
$point->setBoundaryPoints([0, 1], [3, 4]);
// fuel
$fuel = new Fuel();
$fuel->setFuel(12,3);
// car1 from A
$car1 = new Car1($components , $point, $fuel);
echo "<p style='color:red'>move up</p>";
$car1->moveUp();
$car1->setComponents(new Components([3, 4]));
$car1->moveUp();
$fuel->setFuel(12,3);
$car1->moveUp();
echo "<hr>";
echo "<p style='color:red'>move down</p>";
$car1->moveDown();
$car1->moveDown();
echo "<hr>";
$car1->setComponents(new Components([1, 2]));
echo "<p style='color:red'>move left</p>";
$car1->moveLeft();
$car1->moveLeft();
echo "<hr>";
echo "<p style='color:red'>move right</p>";
$car1->setComponents(new Components([1, 1]));
$car1->moveRight();
$car1->moveRight();
$car1->moveRight();
$car1->moveRight();
echo "<hr>";
//$car1->setFuel(123.2);
//echo "<pre>";
//var_dump($car1);
//echo "</pre>";
