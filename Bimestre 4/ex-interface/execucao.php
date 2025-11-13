<?php 
require_once("model/IFormaGeometrica.php");
require_once("model/Retangulo.php");
require_once("model/Quadrado.php");
require_once("model/Circulo.php");

do {
    print "---------MENU------------- \n";
    print "1- Quadrado \n";
    print "2- Circulo \n";
    print "3- Retangulo \n";
    print "0- Sair \n";

    $option = readline("Informe uma opção: ");

    if ($option == 1) {
        $quadrado = new Quadrado();
        $quadrado -> setLado(readline("Informe o valor do lado do quadrado: "));
        print $quadrado -> getArea() . "\n";
        print $quadrado -> getDesenho() . "\n";
    }else if ($option == 2){
        $circulo = new Circulo();
        $circulo -> setRaio(readline("Informe o valor do raio do circulo: "));
        print $circulo -> getArea() . "\n";
        print $circulo -> getDesenho() . "\n";
    }else if ($option == 3){
        $retangulo = new Retangulo();
        $retangulo -> setBase(readline("Informe o valor da base do retângulo: "));
        $retangulo -> setAltura(readline("Informe o valor da altura do retângulo: "));
        print $retangulo -> getArea() . "\n";
        print $retangulo -> getDesenho() . "\n";
    }else if ($option == 0){
        break;
    }else {
        print "Opção Inválida!";
        
    }



}while ($option != 0);






?>
