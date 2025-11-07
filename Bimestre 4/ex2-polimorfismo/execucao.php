<?php

require_once("model/Ingresso.php");
require_once("model/IngressoVip.php");
require_once("model/IngressoCamarote.php");


$ingresso = new Ingresso();
$ingresso -> setValor(10.00);
print "Esse é o valor do ingresso: " .  $ingresso -> getValorTotalFormatado() . "\n";

$ingressoVip = new IngressoVip();
$ingressoVip -> setValor(10.00);
$ingressoVip -> setValorAdicional(20.00);
print "Esse é o valor do ingresso vip: " . $ingressoVip -> getValorTotalFormatado() . "\n";

$ingressoCamarote = new IngressoCamarote();
$ingressoCamarote -> setValor(10.00);
$ingressoCamarote -> setValorAdicional(20.00);
$ingressoCamarote -> setValorAdicionalCamarote(30.00);
print "Esse é o valor do ingrssso camarote: " . $ingressoCamarote -> getValorTotalFormatado() . "\n"


?>
