<?php

require_once("Clube.php");

class Jogador {
    private string $nome;
    private string $posicao;
    private int $num;
    private Clube $clube;

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
     * Get the value of posicao
     */
    public function getPosicao(): string
    {
        return $this->posicao;
    }

    /**
     * Set the value of posicao
     */
    public function setPosicao(string $posicao): self
    {
        $this->posicao = $posicao;

        return $this;
    }

    /**
     * Get the value of num
     */
    public function getNum(): int
    {
        return $this->num;
    }

    /**
     * Set the value of num
     */
    public function setNum(int $num): self
    {
        $this->num = $num;

        return $this;
    }

    /**
     * Get the value of clube
     */
    public function getClube(): Clube
    {
        return $this->clube;
    }

    /**
     * Set the value of clube
     */
    public function setClube(Clube $clube): self
    {
        $this->clube = $clube;

        return $this;
    }
}




?>