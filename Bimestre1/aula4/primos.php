<?php

function primo ($numero){

    for ($i=$numero - 1; $i > 1; $i--) { 
        if($numero % $i == 0 ){
            return false;
        }
    }
    return true;
}



while (true) {

    $numero = readline("Informe um Número: ");

    if ($numero < 1) {
        break;
        
    }

    if (primo($numero)) {

        print "O " . $numero . " é primo \n";
    }else {
        print "O ". $numero . " não é primo \n";
    }
}

