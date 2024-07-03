<?php
require_once 'Carrinho2.php';
require_once 'Cliente.php';
require_once 'Pagamento.php';
require_once 'Pedido.php';
require_once 'Produto.php';

class TesteCliente
{
    public function realizaTeste()
    {
        $cliente = new Cliente("João", "Silva", "joão@gmail.com", "49005836508", "Rua Brasil");
        $cliente = new Cliente("Maria", "Olivera", "Maria@gmail.com", "49374530457", "Rua sap");
        $cliente-> Comprar();
        
        echo "Dados do cliente:\n";
        $this->exibirDadosCliente($cliente);
    }
    
    private function exibirDadosCliente($cliente)
    {
        echo "Nome: " . $cliente->getNome() . " " . $cliente->getSobrenome() . "\n";
        echo "Email: " . $cliente->getEmail() . "\n";
        echo "Telefone: " . $cliente->getTelefone() . "\n";
        echo "Endereço: " . $cliente->getEndereco() . "\n";
    }
}

$teste = new TesteCliente();
$teste->realizaTeste();
?>
