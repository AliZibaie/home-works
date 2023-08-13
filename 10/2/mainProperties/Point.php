<?php


class Point
{
    private array $boundaryPoints;
    private array $LivePoint;
    private float $distance1;

    /**
     * @param array $boundaryPoints
     */
    public function setBoundaryPoints(array $startPoint, array $endPoint): void
    {
        $this->boundaryPoints = ["startPoint"=>$startPoint, "endPoint"=>$endPoint];
        $this->LivePoint = ["livePoint"=>$startPoint];
        $this->distance1 = $this->getDistance($this->getBoundaryPoints()["endPoint"], $this->getBoundaryPoints()["startPoint"]);
    }

    /**
     * @return array
     */
    public function getBoundaryPoints(): array
    {
        return $this->boundaryPoints;
    }

    /**
     * @return array
     */
    public function getLivePoint(): array
    {
        return $this->LivePoint;
    }
    /**
     * @param array $LivePoint
     */
    public function setLivePoint(array $LivePoint): void
    {
        $this->LivePoint["livePoint"] = $LivePoint;
    }

    public function getDistance(array $point1, array $point2): float{
        $x = $point1[0] - $point2[0];
        $y = $point1[1] - $point2[1];
        return sqrt(pow($x, 2) + pow($y,2));

    }

    /**
     * @return float
     */
    public function getDistance1(): float
    {
        return $this->distance1;
    }

    /**
     * @param float $distance1
     */
    public function setDistance1(float $distance1): void
    {
        $this->distance1 = $distance1;
    }


}