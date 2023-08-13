<?php

interface Cart
{
    public function addItem(array $item,int $number);
    public function removeItem(string $name,int $number);
    public function calculateTotalPrice();
}