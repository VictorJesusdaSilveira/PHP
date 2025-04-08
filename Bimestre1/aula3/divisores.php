<?php

$num = 2;

divisores($num);

function divisores($num){
    while ($num > 1) {
        $num = readline("Informe um número: ");

        for ($i=$num -1; $i > 0 ; $i--){
            if($num % $i == 0){
                if ($i == 1) {
                print $i . "\n";
                }else {
                print $i . ", ";
                }
          
            }
        }
  
    }
}


