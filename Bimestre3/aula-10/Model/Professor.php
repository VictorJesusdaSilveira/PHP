<?php
require_once("Pessoa.php");

class Professor extends Pessoa {
    private float $salario;


    public function __toString(){
        $dados_professor = "Nome: " . $this -> getNome();
        $dados_professor .= " | RG: " . $this -> getRg();
        $dados_professor .= " | Idade: " . $this -> getIdade();
        $dados_professor .= " | Salário: " . $this -> salario;
        return $dados_professor;
    }


    /**
     * Get the value of salario
     */
    public function getSalario(): float
    {
        return $this->salario;
    }

    /**
     * Set the value of salario
     */
    public function setSalario(float $salario): self
    {
        $this->salario = $salario;

        return $this;
    }
}


?>