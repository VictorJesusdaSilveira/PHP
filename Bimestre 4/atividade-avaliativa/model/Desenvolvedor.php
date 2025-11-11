<?php 
require_once("Funcionario.php");

class Desenvolvedor extends Funcionario {

    public function getCalcularSalario(){
        $salario_desenvolvedor = 1500.00 * 2.3;
        return $salario_desenvolvedor;
    }


    public function getCargo(){
        return "Desenvolvedor";
    }

}





?>