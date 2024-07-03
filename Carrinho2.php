<?php
class Carrinho {
    private $itens;
    private $total;
    private $quantidade;

    public function __construct() {
        $this->itens        = [];
        $this->total        = 0;
        $this->quantidade   = 0;
    }
    public function adicionarItem(Produto $produto, $quantidade) {
        $this->itens[] = ['produto' => $produto, 'quantidade' => $quantidade];
    }
    public function getItens() {
        return $this->itens;
    }
    public function getTotal() {
        return $this->total;
    }
    public function getQuantidade() {
        return $this->quantidade;
    }
}
?>