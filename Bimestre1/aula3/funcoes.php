<?php

//Média de 3 números

function media($a, $b, $c) //: int{
{
    //Corpo função
    print "função media\n";
    $soma = $a + $b + $c;
    $media = $soma / 3;

    return $media;
    //print $media ."\n";
}

//programa principal

//media(22, 47 , 50);
//media(4, 5, 6);

$a = 10;
$b = 20;
$c = 30;
print media(23.4, $c, $b);

//print $media . "\n";

