<?php
    require_once('Car.php');
    class UberVan extends Car{
        public $typeCarAccepted;
        public $seatsMaterial;

        public function __construct($license,$driver,$typeCarAccepted,$seatsMaterial)
        {
            parent::__construct($license,$driver);
            $this->typeCarAccepted = $typeCarAccepted;
            $this->seatsMaterial = $seatsMaterial;
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