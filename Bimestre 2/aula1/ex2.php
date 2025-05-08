<?php
//Objetos

class Retangulo{
    public $altura;
    public $base;
    public $area;
    public $perimetro;

    function area($altura, $base){

        $area = $this->altura * $this->base;

        print("Essa é a área do retângulo: ". $this->area . "\n");
    }

    function perimetro($altura, $base){

        $perimetro = 2 * $this->base * $this->altura;

        print("Esse é o perímetro do retângulo: ". $this->perimetro); 

    }


}

//Main

for ($i=0; $i < 3; $i++) { 

    $retangulos = new Retangulo();

    $retangulos->base = readline("Qual é a base do retângulo? ");
    $retangulos->altura = readline("Qual é a altura do retângulo? ");

    $retangulos->area($altura, $base);
    $retangulos->perimetro($altura, $base);

    print("Dados dos retângulos: \n");
    print("Base: " . $retangulos->base);
    print("\n Altura: " . $retangulos->altura);
    print("\n Área: ". $retangulos->area);
    print("\n Perímetro: ". $retangulos->perimetro);
    print("\n");

}






       



?>