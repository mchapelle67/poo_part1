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
    private int $__vitesseActuelle = 0;
    private bool $__status = false;


// CONSTRUCT 
    public function __construct(string $marque, string $modele, int $nbPortes) {
        $this->__marque = $marque;
        $this->__modele = $modele;
        $this->__nbPortes = $nbPortes;

    }

// METHODES 
        public function demarrer(): string {
            if ($this->__status){
                    return "Le vehicule $this est démarré";
            } else {
                $this->__status = true;
                return "Le vehicule $this démarre.";
            } 
        }

    public function stopper(): string{
        if($this->__status) {
         $this->__status = false;
         $this->__vitesseActuelle = 0;
            return "Le vehicule $this est en train de s'arrêter.";
        } else {
            return "Le vehicule $this est stoppé.";
        }
    }

     public function accelerer(int $vitesse) : string {
        if($this->__status) {
           $this->__vitesseActuelle += $vitesse;
           return "Le vehicule $this accélère de $vitesse km/h.";
        } else {
         return "Pour accélerer, il faut démarrer le véhicule $this !";
        }
       }
       
       public function ralentir(int $vitesse) : string {
             if ($this->__status) {
             $this->__vitesseActuelle -= $vitesse;
                return "Le vehicule $this ralentis de $vitesse km/h.";
         } else {
            return "Pour ralentir, il faut que le voiture $this soit en train de rouler.";
         } 
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

    public function getStatus(): string {
        return $this->__status ? "Démarré" : "À l'arrêt";
    }

// AFFICHAGE
    public function __toString() {
        return $this->getMarque()." ".$this->getModele();

}
}

$v1 = new Voiture("Peugeot","408", 5);
$v2 = new Voiture ("Citroën", "C4", 3);

$v1->demarrer();
$v1->accelerer(50);
// echo $v1->getStatus();

// INFOS VEHICULE 1

echo "<p>Infos vehicule 1<br>
***************************<br>
Nom et modèle du vehicule: $v1 <br>
Nombre de porte: ".$v1->getNbPortes()."<br>"
.$v1->demarrer()."<br>
Sa vitesse actuelle est de: ".$v1->getVitesseActuelle()." km/h </p>";

// INFOS VEHICULE 2

echo "<p>Infos vehicule 2<br>
***************************<br>
Nom et modèle du vehicule: $v2 <br>
Nombre de porte: ".$v2->getNbPortes()."<br>"
.$v2->stopper()."<br>
Sa vitesse actuelle est de: ".$v2->getVitesseActuelle()." km/h</p>";

$v1->stopper();

echo "<p>"
.$v1->demarrer()."<br>"
.$v1->accelerer(50)."<br>"
.$v2->demarrer()."<br>";

$v2->stopper();

echo $v2->stopper()."<br>";

$v2->demarrer();
$v2->accelerer(20);

echo "Le vehicule $v2 veut accélerer de ".$v2->getVitesseActuelle()." kmh/h.<br>";

$v2->ralentir(20);

echo
"La vitesse du vehicule $v1 est de: ".$v1->getVitesseActuelle()." km/h.<br>
La vitesse du vehicule $v2 est de: ".$v2->getVitesseActuelle()." km/h.</p>";
