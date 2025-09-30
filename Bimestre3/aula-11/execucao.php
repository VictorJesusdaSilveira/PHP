<?php

require_once("model/Pessoa.php");
require_once("model/PessoaFisica.php");
require_once("model/PessoaJuridica.php");


$pessoas = array();

do {
    print "\n----------MENU-----------\n";
    print "1- Cadastrar Pessoa Física: \n";
    print "2- Cadastrar Pessoa Jurídica: \n";
    print "3- Listar as Pessoas: \n";
    print "4- Excluir: \n";
    print "0- Sair\n";
    print "\n";

    $option = readline("\nInforme a opção desejada: ");

    if ($option == 1) {
        $pessoaFisica = new PessoaFisica;
        $pessoaFisica->setNome(readline("Informe o nome da pessoa: "))->setIdade(readline("Informe a idade da pessoa: "))->setCpf(readline("Informe o CPF da pessoa: "));
        array_push($pessoas, $pessoaFisica);
    } elseif ($option == 2) {
        $pessoaJuridica = new PessoaJuridica;
        $pessoaJuridica->setNome(readline("Informe o nome da empresa: "))->setNomeFantasia(readline("Informe o nome comercial da empresa: "))->setCnpj(readline("Informe o cnpj da empresa: "));

        array_push($pessoas, $pessoaJuridica);
    } elseif ($option == 3) {
        foreach ($pessoas as $p) {
            if ($p instanceof PessoaFisica) {
                print "\n Física: \n";
                print $p . "\n";
            } else if ($p instanceof PessoaJuridica) {
                print "\n Jurídica: \n";
                print $p . "\n";
            } else {
                print "\n Pessoa não cadastrada \n";
            }
        }
    } elseif ($option == 4) {
        if (count($pessoas) == 0) {
            print "\n Não há pessoas cadastradas \n";
        } else {
            print "\nEssas são as pessoas cadastradas até o momento: \n";

            foreach ($pessoas as $p) {
                if ($p instanceof PessoaFisica) {
                    print "\n Física: \n";
                    print $p . "\n";
                } else if ($p instanceof PessoaJuridica) {
                    print "\n Jurídica: \n";
                    print $p . "\n";
                } else {
                    print "\n Pessoa não cadastrada \n";
                }
            }

            $indice_pessoa = readline("\n Informe o índice do cadastro que deve ser excluído \n");

            if ($indice_pessoa >= 1 and $indice_pessoa <= count($pessoas)) {
                array_splice($pessoas, $indice_pessoa - 1, 1);
            } else {
                print "índice inválido \n";
            }
        }
    } elseif ($option == 0) {
        print "Programa Encerrado!";
        break;
    } else {
        print "Opção Inválida.";
    }
} while ($option != 0);
