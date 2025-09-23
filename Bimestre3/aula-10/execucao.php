<?php
require_once("model/Aluno.php");
require_once("model/Professor.php");
require_once("model/Pessoa.php");


//criar um aluno

$aluno = new Aluno();
$aluno -> setMatricula("12345") -> setNome("Gabriel") -> setRg("43673ABC") -> setIdade(16);


//criar um professor

$professor = new Professor();
$professor -> setNome("Daniel") -> setRg("54321") -> setIdade(27) -> setSalario(1000);

print $aluno . "\n";
print $professor . "\n";

?>