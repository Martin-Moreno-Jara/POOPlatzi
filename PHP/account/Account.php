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

    public function getId(){
        return $this->id;
    }
    public function setName($name){
        $this->name = $name;
    }
    public function getName(){
        return $this->name;
    }

    public function setDocument($document){
        $this->document = $document;
    }
    public function getDocument(){
        return $this->document;
    }

    public function setEmail($email){
        $this->email = $email;
    }
    public function getEmail(){
        return $this->email;
    }
    public function setPassword($pass){
        $this->password = $pass;
    }
    public function getPassword(){
        return $this->password;
    }

    }
?>