<?php

//Função para procurar um número em um array

function existe(array $vet, int $num){
    foreach ($vet as $v) {
        if ($v == $num) {
            return true;
        }

    }

    return false;

};

function imprime (array $vet){
    foreach ($vet as $v) {

        print $v . ",";
        
    }



}



//Main Programa

//Ler o vetor A
$a = array();
print  "Informe os elementos do vetor A \n";
for ($i=0; $i < 5; $i++) {
    $num = readline("Informe um número: ");
    array_push($a , $num);


}

//Ler o vetor B
$b = array();
print "Informe os elementos do vetor B \n";
for ($i=0; $i < 5; $i++) {
    $num = readline("Informe um número: ");
    array_push($b , $num);
}

// Conjunto C - Intersecção entre o vetor A e o vetor B
$c = array();
foreach ($a as  $vet1) {
    if (existe($b , $vet1)) {
        array_push($c, $vet1);
        
    }    
            
        }
    



print "\n Vetor C: intersecção: \n";
imprime($c);


// Conjunto D - União entre o vetor A e o vetor B

$d = array();
foreach ($a as  $vet1) {
    if (! existe($d , $vet1)) 
    array_push($d , $vet1);

    foreach ($b as  $vet2) {
        if (! existe($d , $vet2))
        array_push($d , $vet2);
    }

print "\n Vetor D - união: \n";
imprime($d);

}



?>