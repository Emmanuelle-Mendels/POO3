<?php

require_once 'Highway.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';
require_once 'Vehicle.php';
require_once 'Bicycle.php';
require_once 'Skateboard.php';
require_once 'Car .php';



$car3 = new Car('yellow',4,'fuel');
try {

    $car3->setParkBrake(true);
    var_dump($car3);
    echo($car3->start());
} catch (Exception $e){
    echo $e->getMessage();
}finally{
    echo " Ma voiture roule comme un donut ";
}

var_dump($car3);



