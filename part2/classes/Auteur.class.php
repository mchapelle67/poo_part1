<h1>POO Exercice 1 - Auteur</h1>

<?php 

class Auteur {
    private string $_nom;
    private string $_prenom;


    public function __construct(string $nom, string $prenom){
        $this->nom = $_nom;
        $this->prenom = $prenom;
    }


    public function getNom(): string {
        return $this->nom;
    }
    public function getPrenom(): string {
        return $this->prenom;
    }


    public function setNom(string $nom) {
        $this->nom = $_nom;
    }
    public function setPrenom(string $prenom) {
        $this->prenom = $_prenom;
    }

    
}