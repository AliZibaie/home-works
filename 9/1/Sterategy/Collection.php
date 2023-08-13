<?php 
require_once 'includes/includes.php';


class Collection {
    public array $list;
    public object $sort;
    public function __construct(SortingSterategy $sort) {
        return $this->sort = $sort;
    }
    public function addItem($item) {
        return $this->list[] = $item;
    }
    public function getAll() {
       return $this->list = $this->sort->getSortedSet($this->list);
    }
}

/////////////////////////  Reverse Sort Test
/*
$reverseSortList = new Collection(new ReverseSort());
$reverseSortList->addItem(1);
$reverseSortList->addItem(7);
$reverseSortList->addItem(2);
$reverseSortList->addItem(3);
$reverseSortList->addItem(122);
$reverseSortList->addItem(5);
$reverseSortList->addItem(9);
$reverseSortList->addItem(112);
*/
/*
$reverseSortList = new Collection(new ReverseSort());
$reverseSortList->addItem("mohammad");
$reverseSortList->addItem("ali");
$reverseSortList->addItem("javad");
$reverseSortList->addItem("reza");
$reverseSortList->addItem("amin");
*/


/////////////////////////  Plain Sort Test
/*
$reverseSortList = new Collection(new PlainSort());
$reverseSortList->addItem(1);
$reverseSortList->addItem(7);
$reverseSortList->addItem(2);
$reverseSortList->addItem(3);
$reverseSortList->addItem(122);
$reverseSortList->addItem(5);
$reverseSortList->addItem(9);
$reverseSortList->addItem(112);
z
/*
$reverseSortList = new Collection(new PlainSort());
$reverseSortList->addItem("mohammad");
$reverseSortList->addItem("ali");
$reverseSortList->addItem("javad");
$reverseSortList->addItem("reza");
$reverseSortList->addItem("amin");
*/

echo "<pre>";
var_dump($reverseSortList->getAll());
echo "</pre>";
