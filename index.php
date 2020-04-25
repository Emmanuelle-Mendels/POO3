<?php

require_once 'LightableInterface.php';
require_once 'Highway.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';
require_once 'Vehicle.php';
require_once 'Bicycle.php';
require_once 'Skateboard.php';
require_once 'Car.php';


$car = new Car('red',5, 'fuel');
$car->switchOn();
var_dump($car);
$car->switchOff();
var_dump($car);

$bike = new Bicycle('pink', 1);
$bike->switchOn();
var_dump($bike);
$bike->setCurrentSpeed(5);
$bike->switchOn();
var_dump($bike);
$bike->setCurrentSpeed(11);
$bike->switchOn();
var_dump($bike);





