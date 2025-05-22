<?php
//Objeto
class Livro{
    //Atributos
    private $numpg;
    private $titulo;
    private $autor;
    private $genero;

    //Métodos
    function getDados(){
        $dados = sprintf(("Título: %s | Autor: %s | Genero: %s | Número de páginas: %int "));
        $livro = $this->titulo . $this->autor . $this->genero . $this->numpg;
        return $livro . "\n";

    }


    //Gets e Sets
    /**
     * Get the value of numpg
     */
    public function getNumpg()
    {
        return $this->numpg;
    }

    /**
     * Set the value of numpg
     */
    public function setNumpg($numpg): self
    {
        $this->numpg = $numpg;

        return $this;
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
}

//main

//Leitura dos dados

$livro1 = new Livro();
$livro1 -> setTitulo(readline("Informe o título do livro 1: "));
$livro1 -> setGenero(readline("Informe o gênero do livro 1: "));
$livro1 -> setAutor(readline("Informe o autor do livro 1: "));
$livro1 -> setNumpg(readline("Informe o número de páginas do livro 1: "));


$livro2 = new Livro();
$livro2 -> setTitulo(readline("Informe o título do livro 2: "));
$livro2 -> setGenero(readline("Informe o gênero do livro 2: "));
$livro2 -> setAutor(readline("Informe o autor do livro 2: "));
$livro2 -> setNumpg(readline("Informe o número de páginas do livro 2: "));


$livro3 = new Livro();
$livro3 -> setTitulo(readline("Informe o título do livro 3: "));
$livro3 -> setGenero(readline("Informe o gênero do livro 3: "));
$livro3 -> setAutor(readline("Informe o autor do livro 3: "));
$livro3 -> setNumpg(readline("Informe o número de páginas do livro 3: "));


//Identificar o livro que tem mais páginas

$livroMaisPgs = null;
if ($livro1 -> getNumpg() > $livro2 -> getNumpg() and $livro1 -> getNumpg() > $livro3 -> getNumpg()) $livroMaisPgs = $livro1;
else if($livro2 -> getNumpg() > $Livro3 -> getNumpg())
    $livroMaisPgs = $livro2;
    
else {
    $livroMaisPgs = $livro3;
}

//Imprimir os dados do livro com mais páginas
print $livroMaisPgs;



?>

