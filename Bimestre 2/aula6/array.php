<?php
class Robo{

    //Atributos
    private $velocidade;
    private $tipo;
    private $peso;

    //Métodos
    public function ligar(){
        print "Robo ligado\n";
    }

    public function mover(){
        print "Robo movendo \n";
    }

    public function getDados(){
        $dados = "Peso: " . $this -> peso . "\n";
        $dados .= " | Tipo: " . $this -> tipo . "\n";
        $dados .= " | Velocidade: " . $this -> velocidade . "\n";

        return $dados;
    }

    public function __toString(){
        return $this -> getDados();
        
    }

    //Gets and Sets

    /**
     * Get the value of velocidade
     */
    public function getVelocidade()
    {
        return $this->velocidade;
    }

    /**
     * Set the value of velocidade
     */
    public function setVelocidade($velocidade): self
    {
        $this->velocidade = $velocidade;

        return $this;
    }

    /**
     * Get the value of tipo
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set the value of tipo
     */
    public function setTipo($tipo): self
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get the value of peso
     */
    public function getPeso()
    {
        return $this->peso;
    }

    /**
     * Set the value of peso
     */
    public function setPeso($peso): self
    {
        $this->peso = $peso;

        return $this;
    }
}

//Main

$robo1 = new Robo();
$robo1 -> setPeso(500) -> setTipo("Lego") -> setVelocidade(5);


$robo2 = new Robo();
$robo2 -> setPeso(1000) -> setTipo("Arduino") -> setVelocidade(10);

$robos = array($robo1 , $robo2);

//Chamar o método ligar do robo 2 a partir do array

//$robos[1] -> ligar();

//$robos[0] -> mover();

$robo3 = new Robo();
$robo3 -> setPeso(1500) -> setTipo("Arduino") -> setVelocidade(7);

array_push($robos , $robo3);

//Acessar todos os elementos (objetos) do array

foreach($robos as $r){
    print $r;
}