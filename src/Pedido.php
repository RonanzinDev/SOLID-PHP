<?php


namespace App;
use App\CarrinhoCompra;

class Pedido {
    private string $status;
    private CarrinhoCompra $carrinhoCompra;
    private int $valorPedido;

    public function __construct()
    {
        $this->status = "aberto";
        $this->carrinhoCompra = new CarrinhoCompra();
        $this->valorPedido = 0;
    }

    public function getCarrinhoCompra() : CarrinhoCompra { return $this->carrinhoCompra;} 
    
    public function getStatus() : string { return $this->status;}
    
    public function setStatus(string $status) { $this->status = $status; }

    public function confirmar() : bool {
        if($this->carrinhoCompra->validarCarrinho()) {
            $this->status = "confirmado";
            return true;
        }
        
        return false;
        
    }
}