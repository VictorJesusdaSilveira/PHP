<?php

class Departamento {
    private string $nome;
    private int $numeroSala;

    public function __toString(){
        $dados_dept = $this -> nome . " e o número da sala é " . $this -> numeroSala .  "\n";
        return $dados_dept;
    }
    /**
     * Get the value of nome
     */
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of numeroSala
     */
    public function getNumeroSala(): int
    {
        return $this->numeroSala;
    }

    /**
     * Set the value of numeroSala
     */
    public function setNumeroSala(int $numeroSala): self
    {
        $this->numeroSala = $numeroSala;

        return $this;
    }

    /**
     * Get the value of funcionarios
     */
   
}



?>