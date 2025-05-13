<?php

class Animal{
    public $patas;
    public $pele;
    public $especie;

    function som(){
        if ($this->especie == "Cachorro") {
            print("Au Au \n");

        }elseif ($this->especie == "Vaca") {
            print("Muuuuuuuuuuu \n");

        }elseif ($this->especie == "Galo") {
            print("Cocoricó \n");

        }elseif ($this->especie == "Galinha") {
            print("Pó pó pó \n");

        }elseif ($this->especie == "Pintinho") {
            print("Piu piu piu \n");
            
        }else {
            print("Som padrão \n");
        }
    }

    function movimento(){
        if ($this->especie == "Cachorro") {
            print("O cachorro se movimenta pelo chão \n");

        }elseif ($this->especie == "Vaca") {
            print("A vaca se movimenta pelo chão \n");

        }elseif ($this->especie == "Galo") {
            print("O galo se movimenta pelo chão e voando/planando \n");

        }elseif ($this->especie == "Galinha") {
            print("A galinha se movimenta pelo chão e voando/planando \n");

        }elseif ($this->especie == "Pintinho") {
            print("O pintinho se movimenta pelo chão \n");
        }

    }


}


$animal1 = new Animal();

print("Dados do primeiro animal: \n");
print("\n Espécie: " . $animal1->especie = "Cachorro \n");
print($animal1->som($cachorro));
print("\n Quantidade de patas:". $animal1->patas = 4);
print("\n Corpo composto por: \n". $animal1->pele = "pelos");


$animal2 = new Animal();

print("\n Dados do segundo animal: \n");
print("\n Espécie: " . $animal2->especie = "Vaca \n");
print($animal2->som() == "Vaca \n");
print("\n Quantidade de patas:". $animal2->patas = 4);
print("\n Corpo composto por: \n". $animal2->pele = "pele");

$animal3 = new Animal();

print("\n Dados do terceiro animal: \n");
print("\n Espécie: " . $animal3->especie = "Galo \n");
print($animal3->som() == "Galo \n");
print("\n Quantidade de patas:". $animal3->patas = 2);
print("\n Corpo composto por: \n". $animal3->pele = "penas");

$animal4 = new Animal();

print("\n Dados do quarto animal: \n");
print("\n Espécie: " . $animal4->especie = "Galinha \n");
print($animal4->som() == "Galinha \n");
print("\n Quantidade de patas:". $animal4->patas = 2);
print("\n Corpo composto por: \n". $animal4->pele = "penas");

$animal5 = new Animal();



print("\n Dados do quinto animal: \n");
print("\n Espécie: " . $animal5->especie = "Pintinho \n");
print($animal5->som() == "Pintinho \n");
print("\n Quantidade de patas:". $animal5->patas = 2);
print("\n Corpo composto por: \n". $animal5->pele = "penas \n");




?>