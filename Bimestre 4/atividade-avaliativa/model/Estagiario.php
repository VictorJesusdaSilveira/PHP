<?php 
require_once("Funcionario.php");

class Estagiario extends Funcionario {

    public function getCalcularSalario(){
        $salario_estagiario = 1500.00 * 0.8;
        return $salario_estagiario;
    }

    

    public function getCargo(){
        return "Estagiário";
    }

}




?>