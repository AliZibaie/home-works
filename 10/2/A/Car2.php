    <?php


class Car2 implements Vehicle
{
    private object $point;
    private object $fuel;
    private object $components;
    public function __construct(Components $components, Point $point, Fuel $fuel)
    {
        $this->point = $point;
        $this->fuel = $fuel;
        $this->components = $components;;
        $this->fuel->setFuelCoefficient(1.8);
    }
    /**
     * @param bool $includeComponents
     */
    public function moveUp() : void{
        $y_velocity = (($this->components->getVelocity()["y"] == 0) ? 1 : $this->components->getVelocity()["y"]);
            $livePoint = $this->point->getLivePoint();
            if ($this->fuel->getFuel() >= 1){
                $this->point->setLivePoint([$livePoint["livePoint"][0] , $livePoint["livePoint"][1] += $y_velocity]);
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
        $y_velocity = (($this->components->getVelocity()["y"] == 0) ? 1 : $this->components->getVelocity()["y"]);
        $livePoint = $this->point->getLivePoint();
        if ($this->fuel->getFuel() >= 1){
            $this->point->setLivePoint([$livePoint["livePoint"][0] , $livePoint["livePoint"][1] -= $y_velocity]);
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
        $x_velocity = (($this->components->getVelocity()["x"] == 0) ? 1 : $this->components->getVelocity()["x"]);
        $livePoint = $this->point->getLivePoint();
        if ($this->fuel->getFuel() >= 1){
            $this->point->setLivePoint([$livePoint["livePoint"][0] -= $x_velocity, $livePoint["livePoint"][1] ]);
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
        $x_velocity = (($this->components->getVelocity()["x"] == 0) ? 1 : $this->components->getVelocity()["x"]);
        $livePoint = $this->point->getLivePoint();
        if ($this->fuel->getFuel() >= 1){
            $this->point->setLivePoint([$livePoint["livePoint"][0] += $x_velocity, $livePoint["livePoint"][1] ]);
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