<?php

class Pessoa
{

    private $nome;
    private $sobrenome;
    private $idade;

    public function getDados()
    {
        $dados = $this->nome . " " . $this->sobrenome;
        $dados .= ", " . $this->idade;
        return $dados;
    }

    public function __toString()
    {
        $dados = $this->nome . " " . $this->sobrenome;
        $dados .= ", " . $this->idade;
        return $dados;
    }

    /**
     * Get the value of nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of sobrenome
     */
    public function getSobrenome()
    {
        return $this->sobrenome;
    }

    /**
     * Set the value of sobrenome
     */
    public function setSobrenome($sobrenome): self
    {
        $this->sobrenome = $sobrenome;

        return $this;
    }

    /**
     * Get the value of idade
     */
    public function getIdade()
    {
        return $this->idade;
    }

    /**
     * Set the value of idade
     */
    public function setIdade($idade): self
    {
        $this->idade = $idade;

        return $this;
    }
}

$pessoas = array();

do {
    print "\n----------MENU-----------\n";
    print "1- Cadastrar\n";
    print "2- Listar\n";
    print "0- Sair\n";

    $opcao = readline("Informe a opção: ");

    if ($opcao == 1) {
        $pessoa = new Pessoa;
        $pessoa->setIdade(readline("Qual a sua idade? \n"))->setNome(readline("Qual o seu nome? \n"))->setSobrenome(readline("Qual o seu sobrenome? \n"));

        array_push($pessoas, $pessoa);
    } else if ($opcao == 2) {
        if (count($pesosas) > 0) {
            foreach ($pessoas as $p) {
                //print $p -> getNome() . " " . $p -> getSobrenome() . ", " .  $p -> getIdade() . " anos \n";    
                //print $p -> getDados();
                print $p;
            }
        } else {
            print "Nenhuma pessoa foi cadastrada!";
        }
    } else if ($opcao == 0) {
        print "Programa encerrado! \n";
    } else {
        print "Opção inválida!\n";
    }
} while ($opcao != 0);
