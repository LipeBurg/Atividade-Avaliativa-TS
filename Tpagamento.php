<?php
require_once 'Carrinho2.php';
require_once 'Cliente.php';
require_once 'Pagamento.php';
require_once 'Pedido.php';
require_once 'Produto.php';

class TestePagamento
{
    public function realizaTeste()
    {
        $pagamento = new Pagamento();
        $confirmacaopagamento= $pagamento->confirmarPagamento();
        
        echo $confirmacaopagamento;

        $cancelarpagamento= $pagamento->cancelarPagamento();
        
        echo $cancelarpagamento;
    }
}

$teste = new TestePagamento();
$teste->realizaTeste();
?>
