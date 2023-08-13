<?php
require_once 'includes/includes.php';
require_once 'Collection.php';

// create a normal list
$shopping_list = new Collection(new PlainSort());
$shopping_list->addItem('Ali');
$shopping_list->addItem('Reza');
$shopping_list->addItem('Mohammad');
echo "<pre>";
print_r($shopping_list->getAll());
echo "</pre>";
// what about sorting it backwards?

$shopping_list = new Collection(new ReverseSort());
$shopping_list->addItem('Ali');
$shopping_list->addItem('Reza');
$shopping_list->addItem('Mohammad');
print_r($shopping_list->getAll());