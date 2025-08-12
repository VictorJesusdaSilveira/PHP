<?php
require_once("Modelo/Clube.php");
require_once("Modelo/Jogador.php");

$chape = new Clube();
$chape -> setNome("Chapecoense") -> setDivisao("B") -> setAnoFundacao(1977);

$jogador = new Jogador();
$jogador -> setNome("Neymar") -> setNum(10) -> setPosicao("Atacante") -> setClube($chape);

print "Dados do Jogador: \n";
print "Nome: " . $jogador -> getNome() . "\n";
print "Número: " . $jogador -> getNum() . "\n";
print "Posição: " . $jogador -> getPosicao() . "\n";
print "Clube: " . $jogador -> getClube() -> getNome();
?>