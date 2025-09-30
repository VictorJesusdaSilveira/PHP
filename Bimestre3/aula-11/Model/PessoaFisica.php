<?php
require_once("Pessoa.php");

class PessoaFisica extends Pessoa {
    private int $idade;
    private string $cpf;


    public function __toString(){
         $dados_fisico = "Nome: " . $this -> getNome();
         $dados_fisico .= "| Idade: " . $this -> idade;
         $dados_fisico .= "| CPF: " . $this -> cpf;
         return $dados_fisico;
    }


    /**
     * Get the value of idade
     */
    public function getIdade(): int
    {
        return $this->idade;
    }

    /**
     * Set the value of idade
     */
    public function setIdade(int $idade): self
    {
        $this->idade = $idade;

        return $this;
    }

    /**
     * Get the value of cpf
     */
    public function getCpf(): string
    {
        return $this->cpf;
    }

    /**
     * Set the value of cpf
     */
    public function setCpf(string $cpf): self
    {
        $this->cpf = $cpf;

        return $this;
    }
}




?>