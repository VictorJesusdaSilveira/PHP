<?php
require_once("model/Animal.php");
require_once("model/Cachorro.php");
require_once("model/Gato.php");

$cachorro1 = new Cachorro();
$cachorro1 -> setNome("Eduardo") -> setRaca("Pincher");

$cachorro2 = new Cachorro();
$cachorro2 -> setNome("Pietro") -> setRaca("Besset Hound");

$gato1 = new Gato();
$gato1 -> setNome("Victor") -> setRaca("Maine Coon");

$gato2 = new Gato();
$gato2 -> setNome("Omar") -> setRaca("Exótico");

print $cachorro1 . "\n";
print $cachorro2 . "\n";
print $gato1 . "\n";
print $gato2 . "\n";


?>