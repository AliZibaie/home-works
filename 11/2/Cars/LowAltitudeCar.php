<?php




class LowAltitudeCar extends Car
{
    public function moveUp()
    {
        $this->currentLocation['y']++;
        $this->fuel--;
    }

    public function moveDown()
    {
        $this->currentLocation['y']--;
        $this->fuel--;
    }

    public function moveLeft()
    {
        $this->currentLocation['x']--;
        $this->fuel--;
    }

    public function moveRight()
    {
        $this->currentLocation['x']++;
        $this->fuel--;
    }
}

