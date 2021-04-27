<?php
require_once "HighWay.php";

final class ResidentialWay extends HighWay
{
    protected int $nbLane = 2;

    protected int $maxSpeed = 50;

    protected array $currentVehicules;

    public function __construct(array $currentVehicules)
        {
        parent::__construct($currentVehicules);
    
        }
        
    public function addVehicule(Vehicle $vehicle) 
    {
            $this->currentVehicules[] = $vehicle;
            return "That's okay <br>";
    }
        //$adversary->setLife($adversary->getLife() - $damage);
}