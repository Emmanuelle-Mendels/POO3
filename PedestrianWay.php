<?php

require_once 'Highway.php';

final class PedestrianWay extends Highway
{

    /**
     * @var int
     */
    protected $nbLane = 1;
    /**
     * @var int
     */
    protected $maxSpeed = 10 ;



    public function addVehicle($vehicle): void
    {
        if($vehicle instanceof Bicycle || $vehicle instanceof Skateboard){
            $this->currentVehicles[] = $vehicle;

        }

    }
}