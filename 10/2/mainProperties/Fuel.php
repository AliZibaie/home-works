<?php

class Fuel
{
    private float $fuel;
    private float $fuelCoefficient;

    /**
     * @return float
     */

    public function getFuel(): float
    {
        return $this->fuel;
    }

    /**
     * @param float $fuel
     */
    public function setFuel(float $fuel)
    {
        $this->fuel = $fuel;
        return $this;
    }

    /**
     * @return float
     */
    public function getFuelCoefficient(): float
    {
        return $this->fuelCoefficient;
    }

    /**
     * @param float $fuelCoefficient
     */
    public function setFuelCoefficient(float $fuelCoefficient)
    {
        $this->fuelCoefficient = $fuelCoefficient;
        return $this;
    }

}