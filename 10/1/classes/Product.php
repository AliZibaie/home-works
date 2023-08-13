<?php

class Product
{
    private string $name;
    private int $cost;
    private int $number;
    private array $item;

    /**
     * @return array
     */
    public function getItem(): array
    {
        return $this->item;
    }

    /**
     * @param array $item
     */
    public function setItem(): void
    {
        $this->item = ["name"=>$this->name, "cost"=>$this->cost, "number"=>$this->number];
    }

    /**
     * @param string $name
     * @param int $cost
     * @param int $number
     */
    public function __construct(string $name, int $cost, int $number)
    {
        $this->name = $name;
        $this->cost = $cost;
        $this->number = $number;
    }

}