<?php 
    class Car{
    private $id;
    private $license;
    private $driver;
    private $passenger;

    public function __construct($license, $driver){
        $this->license=$license;
        $this->driver = $driver;
        }
    
    public function seLicense($a){
        $this->license = $a;
    }
    public function setDriver($a){
        $this->driver = $a;
    }
    public function setPassenger($a){
        if($a==4){
            $this->passenger = $a;
        }
        else{
            echo "Debe tener 4 pasajeros";
        }

    }
    public function getId(){
        return $this->id;
    }
    public function getLicense(){
        return $this->license;
    }
    public function getDriver(){
        return $this->driver;
    }
    public function getPassenger(){
        return $this->passenger;
    }

    public function printDataCar(){
        echo "licencia: $this->license
        Driver:" . $this->driver->getName().  "\n
        
        
        ";
        
    }
    }

?>