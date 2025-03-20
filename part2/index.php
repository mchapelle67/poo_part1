<h1>Exercice 1</h1>

<?php

spl_autoload_register(function ($class) {
    include 'classes/' . $class . '.class.php';
});

$livre1 = new Livre("CA", "1986", "1138", 20);
$livre2 = new Livre("Simetierre", "1983", "374", 15);
$livre3 = new Livre("Le Fleau", "1978", "823", 14);
$livre4 = new Livre("Shinning", "1977", "447", 16);

echo var_dump($livre2);