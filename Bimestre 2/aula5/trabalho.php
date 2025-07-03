<?php
    class Produto{
        //Atributos
        private $descricao;
        private $unidadeMedida;
        private $quantidade;
        private $valorUnitario;

        //Métodos
        public function getValorTotal(){
            $total = $this -> quantidade * $this -> valorUnitario; 
            return $total;
        }
        /**
         * Get the value of descricao
         */
        public function getDescricao()
        {
                return $this->descricao;
        }

        /**
         * Set the value of descricao
         */
        public function setDescricao($descricao): self
        {
                $this->descricao = $descricao;

                return $this;
        }

        /**
         * Get the value of unidadeMedida
         */
        public function getUnidadeMedida()
        {
                return $this->unidadeMedida;
        }

        /**
         * Set the value of unidadeMedida
         */
        public function setUnidadeMedida($unidadeMedida): self
        {
                $this->unidadeMedida = $unidadeMedida;

                return $this;
        }

        /**
         * Get the value of quantidade
         */
        public function getQuantidade()
        {
                return $this->quantidade;
        }

        /**
         * Set the value of quantidade
         */
        public function setQuantidade($quantidade): self
        {
                $this->quantidade = $quantidade;

                return $this;
        }

        /**
         * Get the value of valorUnitario
         */
        public function getValorUnitario()
        {
                return $this->valorUnitario;
        }

        /**
         * Set the value of valorUnitario
         */
        public function setValorUnitario($valorUnitario): self
        {
                $this->valorUnitario = $valorUnitario;

                return $this;
        }
}
    

//Main

$produto1 = new Produto;
$descricao = readline("Qual a descrição do produto? \n");
$unidade = readline("Qual a unidade de medida do produto? \n");
$quantidade = readline("Qual a quantidade do produto que você comprou? \n");
$valorUni = readline("Qual o valor unitário do produto? \n");
$produto1 -> setDescricao($descricao);
$produto1 -> setUnidadeMedida($unidade);
$produto1 -> setQuantidade($quantidade);
$produto1 -> setValorUnitario($valorUni);

print("Produto: ". $produto1 -> getDescricao() . " " .$produto1 -> getUnidadeMedida() . " | " . $produto1 -> getQuantidade() . " X " . $produto1 -> getValorUnitario() . " = " . $produto1 -> getValorTotal() . "\n");

$produto2 = new Produto;
$descricao = readline("\n Qual a descrição do produto? \n");
$unidade = readline("Qual a unidade de medida do produto? \n");
$quantidade = readline("Qual a quantidade do produto que você comprou? \n");
$valorUni = readline("Qual o valor unitário do produto? \n");
$produto2 -> setDescricao($descricao);
$produto2 -> setUnidadeMedida($unidade);
$produto2 -> setQuantidade($quantidade);
$produto2 -> setValorUnitario($valorUni);

print("Produto: ". $produto2 -> getDescricao() . "," . $produto2 -> getUnidadeMedida() . " | " . $produto2 -> getQuantidade() . " X " . $produto2 -> getvalorUnitario() . " = " . $produto2 -> getValorTotal() . "\n");

$produto3 = new Produto;
$descricao = readline("\nQual a descrição do produto? \n");
$unidade = readline("Qual a unidade de medida do produto? \n");
$quantidade = readline("Qual a quantidade do produto que você comprou? \n");
$valorUni = readline("Qual o valor unitário do produto? \n");
$produto3 -> setDescricao($descricao);
$produto3 -> setUnidadeMedida($unidade);
$produto3 -> setQuantidade($quantidade);
$produto3 -> setValorUnitario($valorUni);

print("Produto: ". $produto3 -> getDescricao() . "," . $produto3 -> getUnidadeMedida() . " | " . $produto3 -> getQuantidade() . " X " . $produto3 -> getvalorUnitario() . " = " . $produto3 -> getValorTotal() . "\n");

if($produto1 -> getValorTotal() > $produto2 -> getValorTotal() and $produto1 -> getValorTotal() > $produto3-> getValorTotal()){
        print"Produto com o maior valor total: " . $produto1 -> getDescricao() ." ". $produto1 -> getUnidadeMedida() . "\n";
}else if($produto2 -> getValorTotal()  > $produto3 -> getValorTotal()){
        print"Produto com o maior valor total: " . $produto2 -> getDescricao(). " ". $produto2 -> getUnidadeMedida(). "\n";
}else
        print"Produto com o maior valor total:  " . $produto3 -> getDescricao(). " ". $produto3 -> getUnidadeMedida();


?>