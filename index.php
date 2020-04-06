<?php

require_once 'Highway.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';
require_once 'Vehicle.php';
require_once 'Bicycle.php';
require_once 'Skateboard.php';
require_once 'Car .php';

$car = new Car('red', 4,'fuel');
$bicycle = new Bicycle('purple', 1);
$skateboard = new Skateboard('Yellow', 1);

$motorway = new MotorWay([], 4,130);
$motorway->addVehicle($car);
$motorway->addVehicle($bicycle);
var_dump($motorway);

$pedestrian = new PedestrianWay([],1,10);
$pedestrian->addVehicle($skateboard);
$pedestrian->addVehicle($car);
$pedestrian->addVehicle($bicycle);
var_dump($pedestrian);

$residence = new ResidentialWay([],2,50);
$residence->addVehicle($bicycle);
$residence->addVehicle($skateboard);
$residence->addVehicle($car);
var_dump($residence);
