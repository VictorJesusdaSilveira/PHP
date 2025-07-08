<?php

class Receita
{
    //Atributos

    private $descricao;
    private $valor;

    //Métodos

    public function getDados()
    {
        $dados = "Descrição: " . $this->descricao . " | " . "Valor: " . $this->valor . "\n";
        return $dados;
    }

    //Gets and Sets

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

class Despesa
{
    //Atributos
    private $descri;
    private $val;

    //Métodos

    public function getInform()
    {
        $inform = "Descrição: " . $this->descri . " | " . "Valor: " . $this->val . "\n";
        return $inform;
    }

    //Gets and Sets

    /**
     * Get the value of descri
     */
    public function getDescri()
    {
        return $this->descri;
    }

    /**
     * Set the value of descri
     */
    public function setDescri($descri): self
    {
        $this->descri = $descri;

        return $this;
    }

    /**
     * Get the value of val
     */
    public function getVal()
    {
        return $this->val;
    }

    /**
     * Set the value of val
     */
    public function setVal($val): self
    {
        $this->val = $val;

        return $this;
    }
}

$receitas = array();
$despesas = array();
$saldo = 0;

do {

    print "-----------------MENU--------------\n";
    print " 1- Adicionar Receita: \n";
    print " 2- Adicionar Despesa: \n";
    print " 3- Listar Receitas: \n";
    print " 4- Listar Despesas: \n";
    print " 5- Sumarizar: \n";
    print " 0- Sair \n";

    $opcao = readline("Informe a opção: ");

    if ($opcao == 1) {
        $receita = new Receita();
        $receita->setDescricao(readline("Como foi ganho essa receita? "))->setValor(readline("Qual o valor ganho? "));

        array_push($receitas, $receita);
    } elseif ($opcao == 2) {
        $despesa = new Despesa();
        $despesa->setDescri(readline("Como foi gasto a sua receita? "))->setVal(readline("Quanto foi gasto? "));

        array_push($despesas, $despesa);
    } elseif ($opcao == 3) {
        if (count($receitas) > 0) {
            foreach ($receitas as $r) {
                print $r->getDados();
            }
        } else {
            print "Nenhuma receita cadastrada! ";
        }
    } elseif ($opcao == 4) {
        if (count($despesas) > 0) {
            foreach ($despesas as $d) {
                print $d->getInform();
            }
        } else {
            print "Nenhuma despesa foi cadastrada";
        }
    } elseif ($opcao == 5) {
        //Variáveis
        $total_receitas = 0;
        $total_despesas = 0;

        //Total das Receitas
        foreach ($receitas as $r) {
            $total_receitas += $r->getValor();
        }

        //Total das Despesas
        foreach ($despesas as $d) {
            $total_despesas += $d->getVal();
        }

        $saldo = $total_receitas - $total_despesas;

        print "Saldo: R$" . $saldo . "\n";
        print "Total de Receitas: R$" . $total_receitas . "\n";
        print "Total de Despesas: R$" . $total_despesas . "\n";
    } elseif ($opcao == 0) {
        print "Programa Encerrado!";
    } else {
        print "Opção inválida!";
    }
    
} while ($opcao != 0);
