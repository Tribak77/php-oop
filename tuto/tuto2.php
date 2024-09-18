<?php
class Utilisateur {
    private $nom;
    private $prenom;
    private $email;

    public function __construct($nom, $prenom, $email) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
    }

    public function getNom() {
        return $this->nom;
    }

    public function setprenom($prenom) {
        $this->prenom = $prenom;
        return $this->prenom;
    }
}

$Utilisateur = new Utilisateur("ayoub","tribak","test@gmail.com");
echo $Utilisateur->getNom();
echo $Utilisateur->setprenom(" elyedri");