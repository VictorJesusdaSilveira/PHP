<?php
require_once("model/Midia.php");
require_once("model/DVD.php");
require_once("model/CD.php");

$cd = new CD();
$cd -> setDescricao("ACDC") -> setPreco(10.00);
print $cd -> getTipo() . "\n";

$dvd = new DVD();
$dvd -> setDescricao("Pirata") -> setPreco(20.00);
print $dvd -> getTipo() . "\n"





?>
