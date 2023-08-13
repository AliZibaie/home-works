<?php



class HighAltitudeCar extends Car
{
    protected $speed;

    public function __construct($fuel, $currentLocation, $destination)
    {
        parent::__construct($fuel, $currentLocation, $destination);
        $this->speed = 0;
    }

    public function setSpeed($speed)
    {
        $this->speed = $speed;
    }

    public function moveUp()
    {
        $this->currentLocation['y'] += $this->speed;
        $this->fuel -= $this->speed;
    }

    public function moveDown()
    {
        $this->currentLocation['y'] -= $this->speed;
        $this->fuel -= $this->speed;
    }

    public function moveLeft()
    {
        $this->currentLocation['x'] -= $this->speed;
        $this->fuel -= $this->speed;
    }

    public function moveRight()
    {
        $this->currentLocation['x'] += $this->speed;
        $this->fuel -= $this->speed;
    }
}

