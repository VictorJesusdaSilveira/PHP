<?php
require_once("Instrumento.php");

class Trabalho extends Instrumento{

    public function getNotaFinal() {
        $notaTrabalho = $this -> nota + ($this -> nota * 0.2);
        if($notaTrabalho >= 10.0){
            return 10.0;
        }else {
            return $notaTrabalho;
        }
    }

    public function __toString() {
        $notaFinalTrabalho = "A sua nota no trabalho foi: \n" . $this -> getNotaFinal();
        return $notaFinalTrabalho;
    }
}


?>