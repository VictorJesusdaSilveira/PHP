<?php
class Escola{
    //Atributos

    private $nome;
    private $endereco;
    private $qtd_alunos;

    //Métodos

    public function getDados(){
        $dados = "Nome: " . $this -> nome . "\n";
        $dados .= " | Endereço: " . $this -> endereco . "\n";
        $dados .= " | Quantidade de alunos: " . $this -> qtd_alunos . "\n";

        return $dados;
    }



    public function __toString(){
        return $this -> getDados();
    }
  
    //Gets and Sets

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
     * Get the value of endereco
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * Set the value of endereco
     */
    public function setEndereco($endereco): self
    {
        $this->endereco = $endereco;

        return $this;
    }

    /**
     * Get the value of qtd_alunos
     */
    public function getQtdAlunos()
    {
        return $this->qtd_alunos;
    }

    /**
     * Set the value of qtd_alunos
     */
    public function setQtdAlunos($qtd_alunos): self
    {
        $this->qtd_alunos = $qtd_alunos;

        return $this;
    }
}

//Main

$escolas = array();
$maior = 0;
$escolaMaior = array();

for ($i=0; $i < 4; $i++) { 
    $escola = new Escola();
    $escola -> setEndereco(readline("Endereço: \n"));
    $escola -> setNome(readline("Nome: \n"));
    $escola -> setQtdAlunos(readline("Quantidade de alunos: \n"));  

    array_push($escolas , $escola);

    print "-------------------------------------- \n";
}

//Imprimindo os dados de todos os objetos e Maior quantidade de alunos

foreach ($escolas as $e) {
    print $e;
    if ($e -> getQtdAlunos() > $maior) {
        $escolaMaior = array($e);
        $maior = $e -> getQtdAlunos();
    }

}

//Imprimindo a maior quantidade de alunos

print "----------------------- \n";

print "Escola com mais alunos: \n";

print $escolaMaior[0] -> getDados();

print "-----------------------";
//Maior quantidade de alunos

/*Errado
foreach ($escolas as $e) {
    if ($e[0] -> getQtdAlunos() > $e[1] -> getQtdAlunos() && $e[0] -> getQtdAlunos() > $e[2] -> getQtdAlunos() && $e[0] -> getQtdAlunos() > $e[3] -> getQtdAlunos()) {
        print $e[0];
    }else if ($e[1] -> getQtdAlunos() > $e[2] -> getQtdAlunos() && $e[1] -> getQtdAlunos() > $e[3] -> getQtdAlunos()) {
        print $e[1];
    }else if ($e[2] -> getQtdAlunos() > $e[3] -> getQtdAlunos()) {
        print $e[2];
    }else{
        print $e[3];
    }
}*/

?>