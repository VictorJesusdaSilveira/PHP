<?php

class Calculadora{
    //Atributos
    private $numA;
    private $numB;


    //Métodos

    public function Soma(){
        $soma = $this -> numA + $this -> numB;
        //print("Essa é a soma dos números: " . $soma);
        return $soma;

    }

    public function Subtracao(){
        $subtracao = $this -> numA - $this -> numB;
        print("Essa é a subtração dos números: " . $subtracao);
        return $subtracao;
    }

    public function Multiplicacao(){
        $multiplicacao = $this -> numA * $this -> numB;
        print("Essa é a multiplicação dos números: " . $multiplicacao);
        return multiplicacao;

    }

    public function Divisao(){
        $divisao = $this -> numA / $this -> numB;
        print("Essa é a divisão dos números: " . $divisao);
        return divisao;
    }
    /**
     * Get the value of numA
     */
    public function getNumA()
    {
        return $this->numA;
    }

    /**
     * Set the value of numA
     */
    public function setNumA($numA): self
    {
        $this->numA = $numA;

        return $this;
    }

    /**
     * Get the value of numB
     */
    public function getNumB()
    {
        return $this->numB;
    }

    /**
     * Set the value of numB
     */
    public function setNumB($numB): self
    {
        $this->numB = $numB;

        return $this;
    }
}



//NumB

$calculadora1 = new Calculadora;
$numA = readline("Informe NumA: ");
$numB = readline("Informe NumB: ");
$calculadora1 -> setNumA($numA);
$calculadora1 -> setNumB($numB);

print("Soma: " . $calculadora1 -> Soma() . "\n");
print("Subtração: " . $calculadora1 -> Subtracao() . "\n");
print("Multiplicação: " . $calculadora1 -> Multiplicacao() . "\n");
print("Divisão: " . $calculadora1 -> Divisao());



?>
