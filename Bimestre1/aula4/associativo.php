<?php

$pessoa1 = array("nome" => "Victor",
                 "idade" => 16, 
                "escola" => "IFPR");

$pessoa2 = array("nome" => "Maycon",
                "idade" => 17, 
               "escola" => "IFPR");

//Matriz
$pessoas = array($pessoa1, $pessoa2);


//Imprimir a idade da pessoa
print ($pessoa1["idade"] . "\n");

//Percorrer o array associativo
foreach($pessoa1 as $chave => $percorre) {
    print $chave . " = " . $percorre . "\n";
    
}

?>