<?php
require_once("Animal.php");

class Cachorro extends Animal {



    public function __toString() {
        $dados_cachorro = $this -> getDados();
        $dados_cachorro .= " | Som: " . $this -> Latir();
        return $dados_cachorro;
    }

    public function Latir() {
        return "AU AU \n";
    }




}




?>