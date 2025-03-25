<?php

$num = 0;

print "Leia 10 números e especifique quais são positivos e quais são negativos \n";

for ($i=0; $i < 10; $i++) { 
    $num = readline("Escreva os números: ");
    if ($num > 0) {
        print "Ele é positivo \n";
    }else if ($num == 0) {
        print "Ele é neutro \n";
    }
    else {
        print "Ele é negativo \n";
    }
}






