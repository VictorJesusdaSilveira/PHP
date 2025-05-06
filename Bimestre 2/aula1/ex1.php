<?php
//Classe

class Pessoa{
    public $nome;
    public $endereco;
    public $cidade;
    public $uf;
    public $altura;


    function falarOLA(){
        print " Olá mundo, eu sou o  " . $this->nome;
    }

    function falarEndereco(){
        print "\n Moro em " . $this->endereco . ", " . $this->cidade . "/" . $this->uf;
    }

    function falarAltura(){
        print "\n Minha altura é de " . $this->altura . "\n";
    }

}


//Main

$nome = readline("Informe o seu nome: ");
$endereco = readline("Informe o seu endereço: ");
$cidade = readline("Informe a sua cidade: ");
$uf = readline("Informe o seu estado: ");
$altura = readline("Informe a sua altura: ");

$informPessoa = new Pessoa();

$informPessoa->nome = $nome;
$informPessoa->endereco = $endereco;
$informPessoa->cidade = $cidade;
$informPessoa->uf = $uf;
$informPessoa->altura = $altura;

$informPessoa->falarOla();
$informPessoa->falarEndereco();
$informPessoa->falarAltura();



?>