<?php
require_once("Pessoa.php");

class Aluno extends Pessoa {
    private string $matricula;

    
    public function __toString(){
        $dados_aluno = "Nome: " . $this -> getNome();
        $dados_aluno .= " | RG: " . $this -> getRg();
        $dados_aluno .= " | Idade: " . $this -> getIdade();
        $dados_aluno .= " | Matrícula: " . $this -> matricula;
        return $dados_aluno;
    }

    /**
     * Get the value of matricula
     */
    public function getMatricula(): string
    {
        return $this->matricula;
    }

    /**
     * Set the value of matricula
     */
    public function setMatricula(string $matricula): self
    {
        $this->matricula = $matricula;

        return $this;
    }
}




?>