<?php


//Arrays
$cidades = array("Foz", "SP", "RJ", "Salvador", "Maraú");
$herois = array("Homem-Aranha", "Flash", "Batman", "Homem de Ferro", "Invencible" );
$viloes = array("Thanos", "Carnificina", "Vilgax", "Flash-Reverso", "Macaco-Louco");
$anti_heroi = array("Loki", "Venom", "Wolverine", "Deadpool", "Motoqueiro-Fantasma");


function vetores($vetor){
    foreach ($vetor as $chave) {
        print $chave . "|" ;
        
    }
}


vetores($cidades);
print "\n";

vetores($herois);
print "\n";

vetores($viloes);
print "\n";

vetores($anti_heroi);
print "\n";


?>