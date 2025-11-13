<?php 
require_once("IFormaGeometrica.php");

class Circulo implements IFormaGeometrica{
    private int $raio;

    public function getArea(){
        return $this -> raio * $this -> raio * 3.14;
    }

    public function getDesenho(){
        print "      ***********      \n";
        print "   ***           ***   \n";
        print "  **               **  \n";
        print " **                 ** \n";
        print "**                   **\n";
        print "**                   **\n";
        print " **                 ** \n";
        print "  **               **  \n";
        print "   ***           ***   \n";
        print "      ***********      \n";
        
    }

    /**
     * Get the value of raio
     */
    public function getRaio(): int
    {
        return $this->raio;
    }

    /**
     * Set the value of raio
     */
    public function setRaio(int $raio): self
    {
        $this->raio = $raio;

        return $this;
    }
}






?>