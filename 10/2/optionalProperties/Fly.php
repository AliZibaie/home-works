<?php



class Fly
{
    private string $radius;

    /**
     * @return string
     */
    public function getRadius(): string
    {
        return $this->radius;
    }

    /**
     * @param string $radius
     */
    public function setRadius(string $radius): void
    {
        $this->radius = $radius;
    }
}