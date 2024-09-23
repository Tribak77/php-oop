<?php
class Personne {
    private $id;
    private $nom;
    private $passeport; // Un objet Passeport

    // ... getters et setters ...

    public function setPasseport(Passeport $passeport): void {
        $this->passeport = $passeport;
        $passeport->setPersonne($this); // Lien bidirectionnel
    }
}

class Passeport {
    private $numero;
    private $dateExpiration;
    private $personne; // Un objet Personne

    // ... getters et setters ...

    public function setPersonne(Personne $personne): void {
        $this->personne = $personne;
    }
}

$personne = new Personne(1, "ayoub");
$passeport = new Passeport(1, "2025-01-01");

$personne->setPasseport($passeport);
$passeport->setPersonne($personne);

