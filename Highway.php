<?php

abstract class Highway
{
    /**
     * @var array
     */
    protected $currentVehicles=[];
    /**
     * @var int
     */
    protected $nbLane;
    /**
     * @var int
     */
    protected $maxSpeed;
     /**
      * @return array
      */
    public function getCurrentVehicles(): array
    {
        return $this->currentVehicles;
    }

    /**
     * @param array $currentVehicles
     * @return Highway
     */
    public function setCurrentVehicles(array $currentVehicles): Highway
    {
        $this->currentVehicles = $currentVehicles;
        return $this;
    }

    /**
     * @return int
     */
    public function getNbLane(): int
    {
        return $this->nbLane;
    }

    /**
     * @param int $nbLane
     */
    public function setNbLane(int $nbLane): int
    {
        $this->nbLane = $nbLane;
    }

    /**
     * @return int
     */
    public function getMaxSpeed(): int
    {
        return $this->maxSpeed;
    }

    /**
     * @param int $maxSpeed
     */
    public function setMaxSpeed(int $maxSpeed): void
    {
        $this->maxSpeed = $maxSpeed;
    }

    public function __construct($currentVehicles,$nbLane, $maxSpeed)
    {   $this->currentVehicles = $currentVehicles;
        $this->setNbLane($nbLane);
        $this->setMaxSpeed($maxSpeed);
    }

    abstract public function addVehicle($vehicle): void;
}

