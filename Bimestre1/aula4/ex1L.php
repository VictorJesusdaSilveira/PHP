<?php

$numeros = array();

for ($i=0; $i < 10; $i++) { 
    $num = readline("Infome o número [" . $i . "]");
    array_push($numeros, $num);
}


$soma = 0;
foreach ($numeros as $num) {
    $soma = $soma + $num;

}
    
$media = $soma / 10;
print "A média é: " . $media . "\n";








?>