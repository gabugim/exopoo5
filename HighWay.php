<?php
require_once 'Vehicle.php';
abstract class HighWay
{

    protected array $currentVehicules;

    protected int $nbLane;
    
    protected int $maxSpeed;


    public function __construct(array $currentVehicules)
    {
        $this->currentVehicules = $currentVehicules;
    }

public function getCurrentVehicules(): array
    {
        return $this->currentVehicules;
    }

    public function setCurrentVehicules( array $currentVehicules) : void
    {
        $this->currentVehicules = $currentVehicules;
    }

//nblane
        public function getNbLane(): int
    {
        return $this->nbLane;
    }

    public function setNbLane(int $nbLane): void
    {
        $this->nbLane = $nbLane;
    }

//maxspeed

    public function getMaxSpeed(): int
    {
        return $this->maxSpeed;
    }

    public function setMaxSpeed(int $maxSpeed): void
    {
        $this->maxSpeed = $maxSpeed;
    }

    abstract public function addVehicule(Vehicle $vehicle);
    
    

}