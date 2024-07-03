<?php
require_once 'Carrinho.php';
require_once 'Produto.php';
require_once 'MenorMaior.php';

class TesteMenorMaior
{
    public function realizaTeste()
    {
        $carrinho = new Carrinho();
        $carrinho->adiciona(new Produto("Liquidificador", 250.00));
        $carrinho->adiciona(new Produto("Geladeira", 850.00));
        $carrinho->adiciona(new Produto("Panela de Pressão", 90.00));

        $menorMaior = new MaiorEMenor($carrinho);
        $menorMaior->encontra($carrinho);

        echo "o menor produto: ";
        echo $menorMaior->getMenor()->getNome();
        echo "\no maior produto: ";
        echo $menorMaior->getMaior()->getNome();
    }
}

$teste = new TesteMenorMaior();
$teste->realizaTeste();

?>