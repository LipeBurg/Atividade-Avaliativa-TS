<?php
require_once 'Carrinho2.php';
require_once 'Cliente.php';
require_once 'Pagamento.php';
require_once 'Pedido.php';
require_once 'Produto.php';

class TesteCarrinho2
{
    public function realizaTeste()
    {
        $carrinho = new Carrinho();
        $carrinho->adicionarItem(new Produto("Liquidificador", 250.00, 1, 50, 250.00), 1);
        
        echo "Produtos no carrinho: \n";
        $itens = $carrinho->getItens();
        
        foreach ($itens as $item) {
            $produto = $item['produto'];
            $quantidade = $item['quantidade'];
            
            echo "Nome: " . $produto->getNome() . "\n";
            echo "Quantidade: " . $quantidade . "\n"; // Quantidade adicionada ao carrinho
            echo "Desconto: " . $produto->getDesconto() . "\n";
        }
    }
}

$teste = new TesteCarrinho2();
$teste->realizaTeste();
?>
