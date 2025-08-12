<?php
require_once("modelo/Cidade.php");
require_once("modelo/Estado.php");

$cidades = array();

$estado1 = new Estado();
$estado1 -> setNomeEstado("Santa-Catarina") -> setSigla("SC");

$estado2 = new Estado();
$estado2 -> setNomeEstado("Paraná") -> setSigla("PR");

$cidade1 = new Cidade();
$cidade1 -> setNome("Florianópolis") -> setQtdHabitantes(537.211) -> setAltitude(3) -> setEstado($estado1);
array_push($cidades , $cidade1);

$cidade2 = new Cidade();
$cidade2 -> SetNome("Blumenau") -> setQtdHabitantes(368.000) -> setAltitude(21) -> setEstado($estado1);
array_push($cidades , $cidade2);


$cidade3 = new Cidade();
$cidade3 -> SetNome("Foz do Iguaçu") -> setQtdHabitantes(295.500) -> setAltitude(192) -> setEstado($estado2);
array_push($cidades , $cidade3);

$cidade4 = new Cidade();
$cidade4 -> SetNome("Cascavel") -> setQtdHabitantes(364.104) -> setAltitude(781) -> setEstado($estado2);
array_push($cidades , $cidade4);

foreach ($cidades as $c) {
    printf("A cidade de %s, localizada no estado %s-%s, possui %d habitantes e uma altitude de %d metros. \n" , 
    $c -> getNome(),
    $c -> getEstado() -> getNomeEstado(),
    $c -> getEstado() -> getSigla(),
    $c -> getQtdHabitantes(),
    $c -> getAltitude());
}





?>