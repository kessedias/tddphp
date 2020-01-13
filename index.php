<?php

class MaiorEMenor
{
    private $menor;
    private $maior;

    //método para encontrar produto
    public function encontra($carrinho) //Carrinho de Compras
    {

        //percorrendo o carrinho e pegando os produtos
        foreach ($carrinho->getProdutos() as $produto) {

            //executando a comparação de maior e menor
            if (empty($this->menor) || $produto->getValor() < $this->maior->getValor()) {

                $this->menor = $produto;
            } else if (empty($this->maior) || $produto->getValor() > $this->maior->getValor()) {
                $this->maior = $produto;
            }
        }
    }

    //funções de retorno
    public function getMenor()
    {
        return $this->menor;
    }

    public function getMaior()
    {
        return $this->maior;
    }
}
