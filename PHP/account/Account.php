<?php 
    class Account{
    private $id; 
    private $name;
    private $document;
    private $email;
    private $password;
    
    public function __construct($name, $document)
    {
        $this->name = $name;
        $this->document = $document;
    }
    public function getName(){
        return $this->name;
    }

    }
?>