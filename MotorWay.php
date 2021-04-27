<?php
require_once "HighWay.php";

final class MotorWay extends HighWay
{
    protected int $nbLane = 4;

    protected int $maxSpeed = 130;


    public function __construct(array $currentVehicules)
    {
        parent::__construct($currentVehicules);
   
    }

    public function addVehicule(Vehicle $vehicle)
    {
    if ($vehicle instanceof Bicycle || $vehicle instanceof Skateboard)
            {
           echo "Unhauthorized <br>" ;
            }
         else
         { 
            $this->currentVehicules[] = $vehicle;
            echo "That's okay <br>";
         }
    }
}