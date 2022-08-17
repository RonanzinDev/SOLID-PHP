<?php
require __DIR__ . "/vendor/autoload.php";

use App\CarrinhoCompra;

$carrinho1 = new CarrinhoCompra();
$carrinho1->adicionarItem("Bicicleta", 1000);
$carrinho1->adicionarItem("Carro", 20000);

$carrinho1->exibirValorTotal();
print_r($carrinho1->exibirItens());
