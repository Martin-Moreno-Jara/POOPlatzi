<?php
    require_once('Car.php');
    class UberPool extends Car{
    private $brand;
    private $model;

    public function __construct($license,$driver,$brand,$model)
    {
        parent::__construct($license, $driver);
        $this->brand=$brand;
        $this->model = $model;
    }
    public function setModel($model){
        $this->model = $model;
    }
    public function setBrand($brand){
        $this->brand = $brand;
    }

    public function getModel(){
        return $this->model;
    }
    public function getBrand(){
        return $this->brand;
    }
        
    }
    
?>