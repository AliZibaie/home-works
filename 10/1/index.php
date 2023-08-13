<?php
require_once "includes/include.php";


$book = new Product("book", 1200, 100);
$book->setItem();

$laptop = new Product("laptop", 1000, 100);
$laptop->setItem();

$bag = new Product("bag", 1500, 100);
$bag->setItem();

$bolbol = new Product("bolbol", 1800, 100);
$bolbol->setItem();

//echo "<pre>";
//var_dump($book->getItem(), $bag->getItem(), $laptop->getItem(), $bolbol->getItem());
//echo "</pre>";
//echo "<hr>";

$store = new OnlineStore();
$store->setItem($book->getItem())->setItem($laptop->getItem())->setItem($bag->getItem())->setItem($bolbol->getItem());

$store->addItem($book->getItem(), 5);
$store->addItem($laptop->getItem(), 3);
$store->addItem($bag->getItem(), 2);
$store->addItem($bolbol->getItem(), 4);
$store->addItem($laptop->getItem(), 10);
$store->addItem($bolbol->getItem(), 6);
$store->addItem($bolbol->getItem(), 6);

$store->removeItem("laptop", 3);
$store->removeItem("book", 2);
$store->removeItem("bag", 1);
$store->removeItem("bolbol", 2);

echo "<pre>";
var_dump($store->getCart());
echo "</pre>";

//echo "<pre>";
//var_dump($store->getItem());
//echo "</pre>";

echo "<pre>";
var_dump($store->calculateTotalPrice());
echo "</pre>";
