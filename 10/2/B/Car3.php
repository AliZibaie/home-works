<?php


class Car3
{
    private object $point;
    private object $fuel;
    public function __construct(Point $point, Fuel $fuel)
    {
        $this->point = $point;
        $this->fuel = $fuel;
        $this->fuel->setFuelCoefficient(1.3);
    }
    /**
     * @param bool $includeComponents
     */
    public function moveUp() : void{
        $livePoint = $this->point->getLivePoint();
        if ($this->fuel->getFuel() >= 1){
            $this->point->setLivePoint([$livePoint["livePoint"][0] , $livePoint["livePoint"][1] ++]);
        }
        $this->fuel->setFuel($this->fuel->getFuel() -  ($this->fuel->getFuel() * ($this->fuel->getFuelCoefficient() - 1))) ;
        $distance2 = $this->point->getDistance($this->point->getBoundaryPoints()["endPoint"], $this->point->getLivePoint()["livePoint"]);
        if ($this->fuel->getFuel() < 1){
            echo "not enough fuel! please charge.<br>";
        }
        if ($this->point->getDistance1() >= $distance2){
            $message = "you are getting nearer!";
//                $this->point->setDistance1($distance2);
        }
        else{
            $message = "you are getting farther!";
//                $this->point->setDistance1($distance2);
        }
        $this->point->setDistance1($distance2);
        if ($this->point->getDistance1() == 0){
            $message = "you are reached!";
        }
        echo "distance : ".$this->point->getDistance1()."<br>"."fuel :".$this->fuel->getFuel()."<br>";
        echo $message."<br>";

    }
    public function moveDown() : void{
        $livePoint = $this->point->getLivePoint();
        if ($this->fuel->getFuel() >= 1){
            $this->point->setLivePoint([$livePoint["livePoint"][0] , $livePoint["livePoint"][1] --]);
        }
        $this->fuel->setFuel($this->fuel->getFuel() -  ($this->fuel->getFuel() * ($this->fuel->getFuelCoefficient() - 1))) ;
        $distance2 = $this->point->getDistance($this->point->getBoundaryPoints()["endPoint"], $this->point->getLivePoint()["livePoint"]);
        if ($this->fuel->getFuel() < 1){
            echo "not enough fuel! please charge.<br>";
        }
        if ($this->point->getDistance1() > $distance2){
            $message = "you are getting nearer!";
//            $this->point->setDistance1($distance2);
        }else{
            $message = "you are getting farther!";
        }
        $this->point->setDistance1($distance2);
        if ($this->point->getDistance1() == 0){
            $message = "you are reached!";
        }
        echo "distance : ".$this->point->getDistance1()."<br>"."fuel :".$this->fuel->getFuel()."<br>";
        echo $message."<br>";

    }
    public function moveLeft(){
        $livePoint = $this->point->getLivePoint();
        if ($this->fuel->getFuel() >= 1){
            $this->point->setLivePoint([$livePoint["livePoint"][0] --, $livePoint["livePoint"][1] ]);
        }
        $this->fuel->setFuel($this->fuel->getFuel() -  ($this->fuel->getFuel() * ($this->fuel->getFuelCoefficient() - 1))) ;
        $distance2 = $this->point->getDistance($this->point->getBoundaryPoints()["endPoint"], $this->point->getLivePoint()["livePoint"]);
        if ($this->fuel->getFuel() < 1){
            echo "not enough fuel! please charge.<br>";
        }
        if ($this->point->getDistance1() > $distance2){
            $message = "you are getting nearer!";
//            $this->point->setDistance1($distance2);
        }else{
            $message = "you are getting farther!";
        }
        $this->point->setDistance1($distance2);
        if ($this->point->getDistance1() == 0){
            $message = "you are reached!";
        }
        echo "distance : ".$this->point->getDistance1()."<br>"."fuel :".$this->fuel->getFuel()."<br>";
        echo $message."<br>";

    }
    public function moveRight(){
        $livePoint = $this->point->getLivePoint();
        if ($this->fuel->getFuel() >= 1){
            $this->point->setLivePoint([$livePoint["livePoint"][0] ++, $livePoint["livePoint"][1] ]);
        }
        $this->fuel->setFuel($this->fuel->getFuel() -  ($this->fuel->getFuel() * ($this->fuel->getFuelCoefficient() - 1))) ;
        $distance2 = $this->point->getDistance($this->point->getBoundaryPoints()["endPoint"], $this->point->getLivePoint()["livePoint"]);
        if ($this->fuel->getFuel() < 1){
            echo "not enough fuel! please charge.<br>";
        }
        if ($this->point->getDistance1() > $distance2){
            $message = "you are getting nearer!";
//            $this->point->setDistance1($distance2);
        }else{
            $message = "you are getting farther!";
        }

        $this->point->setDistance1($distance2);
        if ($this->point->getDistance1() == 0){
            $message = "you are reached!";
        }
        echo "distance : ".$this->point->getDistance1()."<br>"."fuel :".$this->fuel->getFuel()."<br>";
        echo $message."<br>";
    }


    public function turnAround()
    {
        // TODO: Implement turnAround() method.
    }

    /**
     * @param object $components
     */
    public function setComponents(object $components): void
    {
        $this->components = $components;
    }

}