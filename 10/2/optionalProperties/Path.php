<?php

class Path
{
    public function friction(){


        if ($this->typeOfLand = "Asphalt"){
            $typeOfLandRatio = 1 ;
        }elseif ($this->typeOfLand = "desert"){
            $typeOfLandRatio = 0.8 ;
        }elseif ($this->typeOfLand = "jungel"){
            $typeOfLandRatio = 0.6 ;
        }else{
            $typeOfLandRatio = 1 ;
        }

        $this->gas -= (($this->gasRatio*$typeOfLandRatio)*$this->gear)/10 ;
        if ( $this->gas >= 0 ){
            $this->currentLocation[1] -= round(($this->typeRatio*$typeOfLandRatio)*$this->gear) ;
        }else{

            echo " your car run ot of fuel " ;
        }

        return $this ;
    }
}