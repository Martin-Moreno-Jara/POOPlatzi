<?php 
require_once("cars\\Car.php");
require_once("cars\\UberBlack.php");
require_once("cars\\UberPool.php");
require_once("cars\\UberVan.php");
require_once("cars\\UberX.php");

require_once("account\\Driver.php");

$uberX = new UberX("ERF576", new Driver("Hernan Dario", "123331"), "Toyota", "Sandero");

$uberX->printDataCar();

$uberPool = new UberPool("AAA123", new Driver("Federico Jimenez","34542"),"Chevrolet","Spark");

$uberPool->printDataCar();


?>