<?php
    require_once('Car.php');
    class UberVan extends Car{
        private $typeCarAccepted;
        private $seatsMaterial;

        public function __construct($license,$driver,$typeCarAccepted,$seatsMaterial)
        {
            parent::__construct($license,$driver);
            $this->typeCarAccepted = $typeCarAccepted;
            $this->seatsMaterial = $seatsMaterial;
        }
        public function setPassenger($passenger){
            if($passenger==6){
            $this->passenger = $passenger;
            }
            else{
            echo "Debe tener 6 pasajeros \n";
            }
        }
        public function setTypeCarAccepted($TypeCar){
            $this->typeCarAccepted = $TypeCar;
        }
        public function setSeatsMaterial($seats){
            $this->seatsMaterial = $seats;
        }

        public function getTypeCarAccepted(){
            return $this->typeCarAccepted;
        }
        public function getSeatsMaterial(){
            return $this->seatsMaterial;
        }
    }
?>