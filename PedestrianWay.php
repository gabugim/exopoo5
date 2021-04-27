<?php
require_once "HighWay.php";

final class PedestrianWay extends HighWay
{
protected int $nbLane = 1;
protected int $maxSpeed = 10;

public function __construct(array $currentVehicules)
    {
    parent::__construct($currentVehicules);
   
    }

public function addVehicule(Vehicle $vehicle)
    {
    if ($vehicle instanceof Car || $vehicle instanceof Truck)
            {
           return "Unhauthorized" ;
            }
            $this->currentVehicules[] = $vehicle;
            return "That's okay";
    }
}