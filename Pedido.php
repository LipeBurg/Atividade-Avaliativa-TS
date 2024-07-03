<?php
class Pedido {
    private $id;
    private $cliente;
    private $produtos;
    private $valor;
    private $desconto;

<?php
class Pedido {
    private $id;
    private $cliente;
    private $produtos;
    private $valor;
    private $desconto;

    public function __construct($id, Cliente $cliente) {
        $this->id       = $id;
        $this->cliente  = $cliente;
        $this->produtos = [];
        $this->valor    = 0;
        $this->desconto = 0;
    }
    public function getId() {
        return $this->id;
    }
    public function getCliente() {
        return $this->cliente;
    }
    public function getProdutos() {
        return $this->produtos;
    }
    public function getValor() {
        return $this->valor;
    }
    public function getDesconto() {
        return $this->desconto;
    }
}
?>
