<?php

require_once("Pessoa.php");

class PessoaJuridica extends Pessoa {
    private string $nomeFantasia;
    private string $cnpj;


     public function __toString(){
         $dados_juridico = "Nome: " . $this -> getNome();
         $dados_juridico .= "| Nome Fantasia: " . $this -> nomeFantasia;
         $dados_juridico .= "| CNPJ: " . $this -> cnpj;
         return $dados_juridico;
    }



    /**
     * Get the value of nomeFantasia
     */
    public function getNomeFantasia(): string
    {
        return $this->nomeFantasia;
    }

    /**
     * Set the value of nomeFantasia
     */
    public function setNomeFantasia(string $nomeFantasia): self
    {
        $this->nomeFantasia = $nomeFantasia;

        return $this;
    }

    /**
     * Get the value of cnpj
     */
    public function getCnpj(): string
    {
        return $this->cnpj;
    }

    /**
     * Set the value of cnpj
     */
    public function setCnpj(string $cnpj): self
    {
        $this->cnpj = $cnpj;

        return $this;
    }
}




?>