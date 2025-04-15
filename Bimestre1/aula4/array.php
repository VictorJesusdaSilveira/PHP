<?php

$vetor = array(5,7,8,4,1,0,3);

//imprimir o quarto elemento do array
//print $vetor[3];
//print "\n";

//Segundo Elemento
//print $vetor[1];


//imprimir o tamanho do array
//print count($vetor);
//print "\n";

//Adicionar um elemento no array
array_push($vetor, 20);


//imprimir todos os elementos - FOR
//for ($i=0; $i < count($vetor); $i++) { 
    //print $vetor[$i];
    //print "\n";
//}

//Imprimir todos os elementos do array - FOREACH
foreach ($vetor as $elemento_vetor) {
    print ($elemento_vetor . "\n");

}

//Testar e ver o conteúdo inteiro do array
//O var_dump também funcionaria, mas ele mostraria mais elementos.
print_r($vetor);

?>
