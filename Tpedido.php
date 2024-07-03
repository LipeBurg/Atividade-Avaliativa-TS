<?php 
require_once 'Carrinho2.php';
require_once 'Cliente.php';
require_once 'Pagamento.php';
require_once 'Pedido.php';
require_once 'Produto.php';

class TestePedido {
    public function realizaTeste()
    {
        $pedido = new Pedido("1","João", "Geladeira", "7000.00" , "0");
        
        echo "id: " . $pedido->getId() . "<br>";
        echo "cliente: " . $pedido->getCliente()->getNome() . "<br>";
        echo "produtos: " . implode(', ', $pedido->getProdutos()) . "<br>"; 
        echo "valor: " . $pedido->getValor() . "<br>";
        echo "desconto: " . $pedido->getDesconto() . "<br>";
    }
}

$teste = new TestePedido();
$teste->realizaTeste();
?>