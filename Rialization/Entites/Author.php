<?php

class Author{

    private $id;
    private $firstName;
    private $lastName;
    private $nationality;

    public function __construct($firstName, $lastName, $nationality)
    {
        $this->id = uniqid();
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->nationality = $nationality;
    }

    public function getId(){
        return $this->id;
    }

    public function getFirstName(){
        return $this->firstName;
    }

    public function setFirstName($firstName){
        $this->firstName = $firstName;
    }

    public function getLastName(){
        return $this->lastName;
    }

    public function setLastName($lastName){
        $this->lastName = $lastName;
    }

    public function getNationality(){
        return $this->nationality;
    }

    public function setNationality($nationality){
        $this->nationality = $nationality;
    }
}



?>