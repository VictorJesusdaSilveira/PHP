<?php

for ($i=1; $i < 6; $i++) {
    $nome = readline("Escreva seu nome: ");
    $peso = readline("Escreva seu peso: ");
    $altura = readline("Escreva sua altura: ");
    $imc = $peso / ($altura * $altura);

    //print "nome : " . $nome  . " peso: " . $peso . " altura: " . $altura . " IMC: " . $imc . "\n";
    printf("%s tem peso %d, altura %f e IMC %.2f \n", $nome, $peso, $altura, $imc);
}
    
