<?php

class Components
{
    private array $velocity;

//    private array $acceleration;

    /**
     * @param array $velocity
     */
    public function __construct(array $velocity)
    {
        $this->velocity = ["x"=>$velocity[0], "y"=>$velocity[1], "result"=>sqrt(pow($velocity[0],2) + pow($velocity[1],2))];
//        $this->acceleration = ["x"=>$acceleration[0], "y"=>$acceleration[1], "result"=>sqrt(pow($acceleration[0],2) + pow($acceleration[1],2))];
    }


    /**
     * @param array $velocity
     */
    public function getVelocity() : array{
        return $this->velocity;
    }
//    public function getAcceleration() : array{
//        return $this->acceleration;
//    }






}


