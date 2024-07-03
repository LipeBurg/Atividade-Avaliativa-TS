<?php
class Produto {
    private $nome;
    private $valor;
    private $quantidade;
    private $desconto;
    private $total;

    public function __construct($nome, $valor, $quantidade, $desconto, $total) {
        $this->nome         = $nome;
        $this->valor        = $valor;
        $this->quantidade   = $quantidade;
        $this->desconto     = $desconto;
        $this->total        = $total;
    }
    public function getNome() {
        return $this->nome;
    }
    public function getValor() {
        return $this->valor;
    }
    public function getQuantidade() {
        return $this->quantidade;
    }
    public function getDesconto() {
        return $this->desconto;
    }
    public function getTotal() {
        return $this->total;
    }
}
?>