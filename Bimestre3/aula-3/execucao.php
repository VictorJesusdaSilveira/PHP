<?php
require_once("\model\Turma.php");
require_once("\model\Aluno.php");


$tds = new Turma();
$tds -> setNome("2° TDS") -> setCurso("Téc em Desenvolvimento de Sistemas");

for ($i=0; $i < 5 ; $i++) { 
    $aluno = new Aluno();
    $aluno -> setNome(readline("Informe o seu nome: \n"));
    $aluno -> setIdade(readline("Informe sua idade: \n"));
    $aluno -> setTurma($tds);

    $tds -> addAluno($aluno);

}
print "\n\nDados da turma:\n";
print "Nome: " . $turma->getNome() . " | Curso: " . $turma->getCurso() . "\n";

print "Alunos:\n";
foreach($turma->getAlunos() as $a)
    echo " - " . $a->getNome() . ", " . $a->getIdade() . " anos\n";


?>