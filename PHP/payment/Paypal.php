<?php
require_once('Payment.php');
class Paypal extends Payment{
    private $email;

    public function __construct($email)
    {
        $this->email = $email;
    }
    public function setEmail($email){
        $this->email = $email;
    }
    public function getEmail(){
        return $this->email;
    }
}
?>