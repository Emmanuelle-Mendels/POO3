<?php

require_once 'Highway.php';

final class ResidentialWay extends Highway
{

    /**
     * @var int
     */
    protected $nbLane = 2;
    /**
     * @var int
     */
    protected $maxSpeed = 50 ;

    public function addVehicle($vehicle): void
    {
        if($vehicle instanceof Vehicle){
            $this->currentVehicles[] = $vehicle;

        }

    }

}