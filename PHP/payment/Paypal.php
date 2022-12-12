<?php
require_once('Payment.php');
class Paypal extends Payment{
    private $email;

    public function __construct($email)
    {
        $this->email = $email;
    }
}
?>