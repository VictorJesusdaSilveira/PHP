<?php

$valor = readline("Me de um valor e te darei o fatorial desse valor: ");
$resultado;
$valor2;

function fatorial($valor, $valor2){
    for ($i=1; $i < $valor; $i++) {
       $valor2 = $i * $valor2;
        
        print $valor2 . "\n";
    }
}

if ($valor == 0) {
    print "Não é possível fazer o fatorial de 0 \n";
}else{
    fatorial($valor, $valor);
}
