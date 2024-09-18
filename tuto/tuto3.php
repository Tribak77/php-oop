<?php
class Animal {
    public $nom;
    public $age;

    public function __construct($nom, $age) {
        $this->nom = $nom;
        $this->age = $age;
    }

    public function manger() {
        echo $this->nom . " mange.\n";
    }
}

class Chat extends Animal {

    public $race;

    public function __construct($nom, $age, $race) {
        parent::__construct($nom, $age);
        $this->race = $race;
    }

    public function miauler() {
        echo $this->nom . " fait Miaou !\n";
    }

    public function manger() {
        echo $this->nom . " mange des croquettes.\n";
    }
}

class Chien extends Animal {
    public function faireDuBruit() {
        echo "Ouaf !\n";
    }
}

$chat = new Chat("Minou", 2, "Siamese");
$chat->manger();   
$chat->miauler(); 

$chien = new Chien("Rex", 4);
$chien->manger();
$chien->faireDuBruit();
?>
