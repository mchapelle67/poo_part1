<h1>Exercice 3</h1>

<p>
    Créer une classe Voiture possédant les propriétés suivantes: marque, modèle, nb porte
    et vitesseActuelle ainsi que les methodes demarrer(), accelerer() et stopper().<br>
    La vitesse est instancié à 0. Une methode personnalisée pourra afficher toutes les 
    informations du vehicule.
</p>

<p>
    v1->"Peugeot","408", 5;<br>
    v2->"Citroën", "C4", 3;
</p>

<p>Coder l'ensemble des methodes, accesseurs et mutateurs de la classe tout en réalisant des 
    jeux de tests pour vérifier la cohérene de la classe Voiture.
</p>

<?php

// CLASS
class Voiture {
    private string $__marque;
    private string $__modele;
    private int $__nbPortes;
    private int $__vitesseActuelle;
    private int $__accelerer = 0;
    private bool $__status = false;


// CONSTRUCT 
    public function __construct(string $marque, string $modele, int $nbPortes) {
        $this->__marque = $marque;
        $this->__modele = $modele;
        $this->__nbPortes = $nbPortes;

    }

// METHODES 
    public function Demarrer(): string {
            if ($this->__status){
                return "Le vehicule {$this->__marque} {$this->__modele} est à l'arrêt.";
        } else {
            $this->__status = true;
                return "Le vehicule {$this->__marque} {$this->__modele} démarre.";
        }
    }
    public function Stopper(): string{
        if($this->__status) {
            return "Le vehicule {$this->__marque} {$this->__modele} est en route.";
        } else {
            $this->__status = true;
            return "Le vehicule {$this->__marque} {$this->__modele} est stoppé.";
        }
    }
        
     public function Accelerer(int $vitesseActuelle): int{
        $this->__accelerer + $vitesseActuelle;
            return $this->__accelerer + $vitesseActuelle;
        }


// SETTING
    public function setMarque(string $marque){
        $this->__marque = $marque;
    }

    public function setModele(string $modele) {
        $this->__modele = $modele;
    }

    public function setNbPortes(int $nbPortes) {
        $this->__nbPortes = $nbPortes;
    }

    public function setVitesseActuelle(int $vitesseActuelle) : void {
        $this->__vitesseActuelle = $vitesseActuelle;
    }

// GETTING
    public function getMarque(): string {
        return $this->__marque;
    } 

    public function getModele(): string {
        return $this->__modele;
    }

    public function getNbPortes(): int {
        return $this->__nbPortes;
    }

    public function getVitesseActuelle(): int {
        return $this->__vitesseActuelle;
    }

// AFFICHAGE
    public function __toString() {
        return $this->getMarque()." ".$this->getModele()." ".$this->getNbPortes()." ".$this->getVitesseActuelle()."<br>";
    }

}


$v1 = new Voiture("Peugeot","408", 5);
$v2 = new Voiture ("Citroën", "C4", 3);

// INFOS VEHICULE 1

echo "<p>Infos vehicule 1<br>
***************************<br>
Nom et modèle du vehicule: ".$v1->getMarque()." ".$v1->getModele()."<br>
Nombre de porte: ".$v1->getNbPortes()."<br>"
.$v1->Demarrer(true)."<br>
Sa vitesse actuelle est de: ".$v1->Accelerer(50)." km/h </p>";

// INFOS VEHICULE 2

echo "<p>Infos vehicule 2<br>
***************************<br>
Nom et modèle du vehicule: ".$v2->getMarque()." ".$v2->getModele()."<br>
Nombre de porte: ".$v2->getNbPortes()."<br>"
.$v2->Stopper()."<br>
Sa vitesse actuelle est de: ".$v2->Accelerer(0)." km/h</p>";

echo "<p>"
.$v1->Demarrer(true)."<br>
Le vehicule ".$v1->getMarque()." ".$v1->getModele()." accelère de ".$v1->Accelerer(50)." km/h<br>"
.$v2->Stopper(true)."<br>"

;