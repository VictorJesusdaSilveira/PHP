<?php
require_once("model/Departamento.php");
require_once("model/Funcionario.php");


$empresa = array();

for ($i=0; $i < 5; $i++) { 
    $departamento = new Departamento;
    $departamento -> setNome(readline("Qual o nome do seu departamento? ")) -> setNumeroSala(readline("Qual é a sala do Departamento? "));

    $funcionario = new Funcionario;
    $funcionario -> setNome(readline("Qual o nome do funcionário? ")) -> setCargo(readline("Qual é o cargo do funcionário? ")) -> setSalario(readline("Qual é o salário do funcionário? ")) -> setDepartamento($departamento);
    array_push($empresa , $funcionario , $departamento);
}

foreach ($empresa as $e) {
    print $e;
}

?>