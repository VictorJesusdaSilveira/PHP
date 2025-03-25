<?php

$pi = 3.14;
$total = 0;

//area($pi,$raio, $raio2, $total);
//circuferencia($pi, $raio);

function area ($pi,$raio, $raio2, $total){
    $total = $pi * $raio * $raio2;

    print" A área é de: ". $total . " cm²\n";

}

function circuferencia($pi, $raio){
    $total = 2 * $pi * $raio;

    print" A circuferência é de: ". $total . " cm²\n";

}

for ($i=0; $i < 3; $i++) { 
    $raio = readline("Me indique o raio de 3 círculos? ");
    $raio2 = $raio;
    area($pi,$raio, $raio2, $total);
    circuferencia($pi, $raio);

}