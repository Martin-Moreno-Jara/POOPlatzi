<?php 
require_once("cars\\Car.php");
require_once("cars\\UberBlack.php");
require_once("cars\\UberPool.php");
require_once("cars\\UberVan.php");
require_once("cars\\UberX.php");

require_once("account\\Driver.php");

$uberX = new UberX("ERF576", new Driver("Hernan Dario", "123331"), "Toyota", "Sandero");
$uberX->setPassenger(4);
$uberX->printDataCar();

$car = new Car("ASD345", new Driver("Ernesto", "5688753"));
$car->setPassenger(4);
$car->printDataCar();

$ubervan = new UberVan("AD4556", new Driver("Matias","67946"),"none","none");
$ubervan->setPassenger(6);
$ubervan->printDataCar();


?>