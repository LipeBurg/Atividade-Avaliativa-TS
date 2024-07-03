<?php 
require_once 'Carrinho2.php';
require_once 'Cliente.php';
require_once 'Pagamento.php';
require_once 'Pedido.php';
require_once 'Produto.php';

class TesteProduto
{
    public function realizaTeste()
    {
        $produto = new Produto("Computador", 4999.99, 1, 0, 4999.99);
        
        echo "Nome: "       . $produto->getNome() . "<br>";
        echo "Valor: "      . $produto->getValor() . "<br>";
        echo "Quantidade: " . $produto->getQuantidade() . "<br>";
        echo "Desconto: "   . $produto->getDesconto() . "<br>";
        echo "Total: "      . $produto->getTotal() . "<br>";
    }
}

$teste = new TesteProduto();
$teste->realizaTeste();

?>
