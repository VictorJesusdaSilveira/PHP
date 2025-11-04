<?php
require_once("Instrumento.php");

class Participacao extends Instrumento
{

    public function getNotaFinal()
    {
        $notaParticipacao = $this->nota;
        if ($notaParticipacao >= 10.0) {
            return 10.0;
        } else {
            return $notaParticipacao;
        }
    }


    public function __toString() {
        $notaFinalParticipacao = "A sua nota de participação foi: \n" . $this -> getNotaFinal();
        return $notaFinalParticipacao;
    }

}
