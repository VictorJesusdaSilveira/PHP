<?php
require_once("model/Instrumento.php");
require_once("model/Participacao.php");
require_once("model/Prova.php");
require_once("model/Trabalho.php");

$notas = array();

do {
    print "-------------Menu----------- \n";
    print "1- Prova \n";
    print "2- Trabalho \n";
    print "3- Participação \n";
    print "4- Todas as Notas \n";
    print "5- Média Final \n";
    print "0- Sair \n";

    $opcao = readline("Escolha uma opção! \n");

    if ($opcao == 1) {
        $prova = new Prova();
        $prova->setNota(readline("Qual a sua nota? \n"));
        $prova->getNotaFinal();
        array_push($notas, $prova);
        print $prova . "\n";
    } else if ($opcao == 2) {
        $trabalho = new Trabalho();
        $trabalho->setNota(readline("Qual a sua nota? \n"))->getNotaFinal();
        print $trabalho . "\n";
        array_push($notas, $trabalho);
    } else if ($opcao == 3) {
        $participacao = new Participacao();
        $participacao->setNota(readline("Qual a sua nota? \n"))->getNotaFinal();
        print $participacao . "\n";
        array_push($notas, $participacao);
    } else if ($opcao == 4) {
        foreach ($notas as $n) {
            print  $n . "\n";
        }
    } else if ($opcao == 5) {
        foreach ($notas as $n) {
            print $n -> getNotaFinal() / 3;
            break;
        }
    }
}while ($opcao != 0);
