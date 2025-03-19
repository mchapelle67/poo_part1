<h1>Exercice 1</h1>
 
<p>
    Créer une classe Personne (nom, prénom et date de naissance).<br>
    Instancier 2 personnes et afficher leurs information.
</p>
 
<?php
 
 
class Personne {

    private string $__nom;
    private string $__prenom;
    private string $__dateDeNaissance;

public function __construct(string $nom, string $prenom, string $dateDeNaissance){
    $this->__nom = $nom;
    $this->__prenom = $prenom;
    $this->__dateDeNaissance = $dateDeNaissance;

}

public function getNom(): string {
    return $this->__nom;
}

public function getPrenom(): string {
    return $this->__prenom;

}

public function getDateDeNaissance(): string {
    return $this->__dateDeNaissance;
}

}

$p1 = new Personne("DUPONT", "Michel", "1980-02-19");
$p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17");

var_dump($p1, $p2);