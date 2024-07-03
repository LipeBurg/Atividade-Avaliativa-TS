<?php
class Pagamento {
    private $pedido;
    public $valor;
    private $status;
    private $tipo;
    private $data;
    
    public function getPedido() {
        return $this->pedido;
    }
    public function getValor() {
        return $this->valor;
    }
    public function getStatus() {
        return $this->status;
    }
    public function confirmarPagamento() {
        $this->status = 'pago';
        echo"pago ";
    }
    public function cancelarPagamento() {
        $this->status = 'cancelado';
        echo"cancelado";
    }
    public function getTipo() {
        return $this->tipo;
    }
    public function getData() {
        return $this->data;
    }
}
?>
