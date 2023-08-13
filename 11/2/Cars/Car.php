<?php




abstract class Car
{
    protected $fuel;
    protected $currentLocation;
    protected $destination;

    public function __construct($fuel, $currentLocation, $destination)
    {
        $this->fuel = $fuel;
        $this->currentLocation = $currentLocation;
        $this->destination = $destination;
    }

    public function increaseFuel($amount)
    {
        $this->fuel += $amount;
    }

    public function getCurrentLocation()
    {
        return $this->currentLocation;
    }

    public function getDestination()
    {
        return $this->destination;
    }

    abstract public function moveUp();

    abstract public function moveDown();

    abstract public function moveLeft();

    abstract public function moveRight();
}

