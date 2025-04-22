<?php

//funções

function imprime(array $vet)
{
    foreach ($vet as $v) {
        print $v . ",";
    }
}

function fahrenheit($num){
    $f = $num * 1.8 + 32;

    return $f;
}

function fatorial($num) {

    for ($i=$num - 1; $i > 0; $i--) { 
        $num = $num * $i;
    }
   
};


function formula($num){

$fx = ($num * $num + $num * 2 + 4);
        
};

//Main Program

$vetor = array();
print "Informe 5 valores: ";
for ($i = 0; $i < 5; $i++) {
    $num = readline("Informe um valor: ");
    array_push($vetor, $num);
}

$vetor1 = array();
foreach ($vetor as  $v) {
    $v = fahrenheit($v);
    array_push($vetor1, $v);
}

foreach ($vetor1 as $v) {
    print $v . ",";
}


$vetor2 = array();
foreach ($vetor as $v) {
    $v = fatorial($v);
    array_push($vetor2 , $v);
}

foreach ($vetor2 as $v) {
    print $v . ",";
}

$vetor3 = array();
foreach ($vetor3 as $v) {
    $v = formula($v);
    array_push($vetor3 , $v);
}

foreach ($vetor3 as $v) {
    print $v . ",";
}


