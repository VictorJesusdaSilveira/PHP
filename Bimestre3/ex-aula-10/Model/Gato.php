<?php
require_once("Animal.php");

class Gato extends Animal {


    public function __toString() {
        $dados_gato = $this -> getDados();
        $dados_gato .= " | Som: " . $this -> Miar();
        return $dados_gato;
    }

    public function Miar() {
        return "Miau miau \n";
    }



}




?>