<?php
require_once 'bicycle.php';
require_once 'car.php';
require_once 'truck.php';
require_once "MotorWay.php";
require_once "PedestrianWay.php";
require_once "ResidentialWay.php";


$car = new Car('green', 4, 'electric');


try {

    echo $car->start();

    // Code to try
} catch (Exception $e) {
    echo $e->getMessage();
    $car->setParkBrake(false);
    echo "frein a main rabaissé";
    echo $car->start();
} finally {
    // this code is always executed
    echo "Ma voiture roule comme un donut";
};
