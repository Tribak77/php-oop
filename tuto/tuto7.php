<?php

class Livre {
    public $titre;
    public $isbn;
    public $auteurs; 
}

class Auteur {
    public $nom;
    public $prenom;

    public function __construct($nom = "", $prenom = "") {
        $this->nom = $nom;
        $this->prenom = $prenom;
    }
}

$livre1 = new Livre();
$livre1->titre = "Le Petit Prince";
$livre1->isbn = "9782266000016";
$livre1->auteurs = [
    new Auteur("Saint-Exupery", "Antoine de")
];

function enregistrerLivreDansFichier(Livre $livre, string $fichier) {
    $json = json_encode($livre, JSON_PRETTY_PRINT);
    file_put_contents($fichier, $json);
}

function lireLivreDepuisFichier(string $fichier) : Livre {
    $json = file_get_contents($fichier);
    return json_decode($json);
}

?>