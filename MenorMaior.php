<?php
require_once 'Produto.php';
require_once 'Carrinho.php';
class MaiorEMenor {
    private $maior;
    private $menor;

    public function encontra(Carrinho $carrinho) {
        foreach ($carrinho->getProdutos() as $produto) {
            if (empty($this->menor) || $produto->getValor() < $this->menor->getValor()) {
                $this->menor = $produto;
            }
            if (empty($this->maior) || $produto->getValor() > $this->maior->getValor()) {
                $this->maior = $produto;
            }
        }
    }

    public function getMaior() {
        return $this->maior;
    }

    public function getMenor() {
        return $this->menor;
    }
}