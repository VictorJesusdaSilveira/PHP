<?php

//criação de classes, métodos e atributos

class Monitor{ // Por padrão a primeira letra da classe tem que ser maiúscula
    
    //Atributos, eles sempre devem ser inicializados com "public"

    public $tamanho;
    public $cor;
    public $preco;

    //Métodos

    function exibirImagem(){ // Por padrão colocar a primeira letra da segunda palavra em maiúsculo
        print "Monitor exibindo imagem no tamanho  " . $this->tamanho . "\n";

    }
    function ligar(){
        print "Monitor ligado \n";


    }
    function desligar(){ 
        print "Monitor desligado \n";
    }
}

//Main Program - inicio do código

$monitorLab = new Monitor();

$monitorLab->tamanho = 21;

$monitorLab->cor = "Preto";

$monitorLab->preco = 500;

$monitorLab->ligar();

$monitorLab->exibirImagem();

$monitorLab->desligar();

print "Dados do Monitor: \n";
print "Tamanho: " . $monitorLab->tamanho . "\n";
print "Cor: " . $monitorLab->cor . "\n";
print "Preco: " . $monitorLab->preco . "\n";
//print_r($monitorLab)

//Outro objeto monitor

$monitorLab2 = new Monitor();

$monitorLab2->tamanho = 14;

$monitorLab2->cor = "Cinza";

$monitorLab2->preco = 1000;

$monitorLab2->ligar();

$monitorLab2->exibirImagem();

$monitorLab2->desligar();
    
print "Dados do Monitor: \n";
print "Tamanho: " . $monitorLab2->tamanho . "\n";
print "Cor: " . $monitorLab2->cor . "\n";
print "Preco: " . $monitorLab2->preco . "\n";
//print_r($monitorLab2)




?>