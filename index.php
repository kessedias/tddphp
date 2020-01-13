<?php
class CarrinhoDeCompras
{
}

class MaiorEMenor
{
    private $menor;
    private $maior;

    //método encontra recebe um carrinho de compras e percorre a lista de produtos, comparando sepre o produto corrente com o "menor e maior de todos".
    //Por fim, é possível identificar o menor e maior
    public function encontra(CarrinhoDeCompras $carrinho) //Carrinho de Compras
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


//Exemplo para pegar maior e menor produto pelo valor

class Produto
{
}



class TestaMaiorEMenor
{
    public function realizaTeste()
    {

        $carrinho = new CarrinhoDeCompras();

        $carrinho->adiciona(
            new Produto("Liquificador", 250.00)
        );

        $carrinho->adiciona(
            new Produto("Geladeira", 450.00)
        );

        $carrinho->adiciona(
            new Produto("Jogo de pratos", 70.00)
        );

        $maiorEMenor = new MaiorEMenor();
        $maiorEMenor->encontra($carrinho);

        echo "O menor produto: ";
        echo $maiorEMenor->getMenor()->getNome() . PHP_EOL;
        echo "O maior produto: ";
        echo $maiorEMenor->getMaior()->getNome() . PHP_EOL;
    }
}
