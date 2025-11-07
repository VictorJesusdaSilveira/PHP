<?php

class Ingresso {
    protected float $valor;


    public function getValorTotal(){
        return $this -> valor;
    }


    public function getValorTotalFormatado(){
        return "R$" . number_format($this -> getValorTotal() , 2 , "," , ".");
    }

    /**
     * Get the value of valor
     */
    public function getValor(): int
    {
        return $this->valor;
    }

    /**
     * Set the value of valor
     */
    public function setValor(int $valor): self
    {
        $this->valor = $valor;

        return $this;
    }
}


?>
