<?php
require_once("Instrumento.php");

class Prova extends Instrumento {

    public function getNotaFinal(){
        $notaProva = $this -> nota + ($this -> nota * 0.3);
         if ($notaProva >= 10.0) {
        return 10.0;
        }else{
        return $notaProva;
    }
    }

    public function __toString() {
        $notaFinalProva = "A sua nota na prova foi: \n" . $this -> getNotaFinal();
        return $notaFinalProva;
    }
}

?>