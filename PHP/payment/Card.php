<?php
require_once('Payment.php');
class Card extends Payment{
    private $number;
    private $cvv;
    private $date;

    public function __construct($number,$cvv,$date)
    {
        $this->number = $number;
        $this->cvv = $cvv;
        $this->date = $date;
    }
    public function setNumber($number){
        $this->number = $number;
    }
    public function setCvv($cvv){
        $this->cvv = $cvv;
    }
    public function setDate($date){
        $this->date = $date;
    }
    public function getNumber(){
        return $this->number;
    }
    public function getCvv(){
        return $this->cvv;
    }
    public function getDate(){
        return $this->date;
    }
}
?>