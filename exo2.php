<h1>Exercice 2</h1>

<p>
    Créer une classe Voiture possédant 2 proprietés (marque, modèle), ainsi qu'une classe VoitureElec
    qui hérite de la classe Voiture avec la proprieté Autonomie en supplément.
</p>

<p> Instancier une voiture classique et une voiture éléctrique avec les caractéristiques suivantes:<br>
Peugeot 408: $v1 new Voiture("Peugeot", "408");<br>
BMW i3 150: $ve1 new VoitureElec("BMW", "i3", "100");
</p>

<?php

class Voiture {

    private string $__marque;
    private string $__modele;

        public function __construct(string $marque, string $modele) {
            $this->__marque = $marque;
            $this->__modele = $modele;
        }

        public function setMarque(): string {
            $this->__marque = $marque;
        }

        public function setModele(): string {
            $this->__modele = $modele;
        }

        public function getMarque(): string {
            return $this->__marque;
        } 

        public function getModele(): string {
            return $this->__modele;
        }

            public function __toString() {
                return $this->getMarque()." ".$this->getModele()."<br>";
            }
}

class VoitureElec extends Voiture { 
    
    private int $__autonomie;

        public function __construct($marque, $modele, int $autonomie){
        parent::__construct($marque, $modele);
        $this->__autonomie = $autonomie;
        }

        public function setAutonomie(): int {
            $this->__autonomie = $autonomie;
        }

        public function getAutonomie(): int {
            return $this->__autonomie;
        }

        public function __toString() {
            return $this->getMarque()." ".$this->getModele()." ".$this->getAutonomie()." km<br>";
            }
}

$v1 = new Voiture("Peugeot", "408");
$ve1 = new VoitureElec("BMW", "i3", 100);

echo $v1, $ve1;