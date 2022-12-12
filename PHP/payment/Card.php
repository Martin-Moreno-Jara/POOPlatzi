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
}
?>