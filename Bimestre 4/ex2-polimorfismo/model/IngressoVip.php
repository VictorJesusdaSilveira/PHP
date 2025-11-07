<?php
require_once("Ingresso.php");

class IngressoVip extends Ingresso {
    private float $valorAdicional;

    public function getValorTotal(){
        return parent:: getvalorTotal() + $this -> valorAdicional;
        
        
    }

    /**
     * Get the value of valorAdicional
     */
    public function getValorAdicional(): int
    {
        return $this->valorAdicional;
    }

    /**
     * Set the value of valorAdicional
     */
    public function setValorAdicional(int $valorAdicional): self
    {
        $this->valorAdicional = $valorAdicional;

        return $this;
    }
}



?>