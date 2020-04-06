<?php

require_once 'Highway.php';

final class MotorWay extends Highway
{

    /**
     * @var int
     */
    protected $nbLane = 4;
    /**
     * @var int
     */
    protected $maxSpeed = 130 ;



    public function addVehicle($vehicle): void
    {
        if($vehicle instanceof Car){
            $this->currentVehicles[] = $vehicle;

        }

    }


}