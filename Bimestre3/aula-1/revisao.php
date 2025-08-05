<?php

class Livro{
    //Atributos
    private $titulo;
    private $autor;
    private $genero;
    private $qtdPg;
    private $valor;


    //Métodos

    public function __toString(){
        $dados = "Titulo: " . $this -> titulo . "\n" . "Autor: " . $this -> autor . "\n" . "Gênero: " . $this -> genero . "\n" . "Quantidade de Páginas: " . $this -> qtdPg . "\n" . "Valor: " . $this -> valor . "\n \n";

        return $dados;
    }
     /**
     * Get the value of titulo
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set the value of titulo
     */
    public function setTitulo($titulo): self
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get the value of autor
     */
    public function getAutor()
    {
        return $this->autor;
    }

    /**
     * Set the value of autor
     */
    public function setAutor($autor): self
    {
        $this->autor = $autor;

        return $this;
    }

    /**
     * Get the value of genero
     */
    public function getGenero()
    {
        return $this->genero;
    }

    /**
     * Set the value of genero
     */
    public function setGenero($genero): self
    {
        $this->genero = $genero;

        return $this;
    }

    /**
     * Get the value of qtdPg
     */
    public function getQtdPg()
    {
        return $this->qtdPg;
    }

    /**
     * Set the value of qtdPg
     */
    public function setQtdPg($qtdPg): self
    {
        $this->qtdPg = $qtdPg;

        return $this;
    }

    /**
     * Get the value of valor
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * Set the value of valor
     */
    public function setValor($valor): self
    {
        $this->valor = $valor;

        return $this;
    }


}

//Menu

$livros = array();

do {
    print "\n----------MENU-----------\n";
    print "1- Inserir Livro\n";
    print "2- Listar Livros\n";
    print "3- Buscar Livro\n";
    print "4- Total Gasto\n";
    print "0- Sair\n";
    print "\n";

    $option = readline("\nInforme a opção desejada: ");

    if ($option == 1) {
        //Inserir
        $livro = new Livro;
        $livro -> setTitulo(readline("Título: \n")) -> setAutor(readline("Autor: \n")) -> setGenero(readline("Gênero: \n")) -> setQtdPG(readline("Páginas: \n")) -> setValor(readline("Valor: "));
        array_push($livros , $livro);

    }else if ($option == 2){
        //Listar
        foreach ($livros as $l) {
            print $l;
        }

    }else if ($option == 3){
        //Buscar

        $position = readline("Qual a posição do livro que você deseja? \n");

        if ($position >= 0 and $position< count($livros)) {
            print $livros[$position];
        }else{
            print "Não existe um livro nessa posição, informe outra posição\n";
        }
    
    }else if ($option == 4){
        //Total

        $soma = 0;

        foreach ($livros as $l) {
            $total = $l -> getValor();      
        }

        print "Total Gasto: " . $total;

    }else if ($option == 0){
        print "Programa encerrado";
        break;
    }else{
        print "Opção inválida";
    }

   
}while($option != 0)

?>


