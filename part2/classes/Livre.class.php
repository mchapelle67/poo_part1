<h1>POO Exercice 1 - Livre</h1>

<?php

class Livre {

// ATTRIBUTS
    private string $_nom;
    private int $_anneeDeParution;
    private int $_nbPages;
    private float $_prix;

    public function __construct(string $_nom, int $_anneeDeParution, int $_nbPages, float $_prix) {
        $this->_nom = $_nom;
        $this->_anneeDeParution = $_anneeDeParution;
        $this->_nbPages = $_nbPages;
        $this->_prix = $_prix;
    }

    public function getNom(): string {
        return $this->_nom;
    }
    public function getAnneeDeParution(): int {
        return $this->_anneeDeParution;
    }
    public function getNbPages(): int {
        return $this->_nbPages;
    }
    public function getPrix(): float {
        return $this->_prix;
    }


    public function setNom(string $_nom) {
        return $this->_nom = $_nom;
    }
    public function setAnneeDeParution(int $_anneeDeParution) {
        return $this->_anneeDeParution = $_anneeDeParution;
    }
    public function setNbPages(int $_nbPages) {
        return $this->_nbPages= $_nbPages;
    }
    public function set(float $_prix) {
        return $this->_prix= $_prix;
    }
}