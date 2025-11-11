<?php 
require_once("Funcionario.php");

class Gerente extends Funcionario{

    public function getCalcularSalario(){
        $salario = 1500.00 * 4.5;
        return $salario;
    }


    public function getCargo(){
        return "Gerente"; 
}



}



?>