<?php
require __DIR__ . "/vendor/autoload.php";

use App\CarrinhoCompra;
use App\EmailService;
use App\Item;
use App\Pedido;

$pedido = new Pedido();

$item1 = new Item();

$item1->setDescricao("Porta copo");

$item1->setValor(18.90);

$item2 = new Item();

$item2->setDescricao("Lâmpada");

$item2->setValor(8.32);

//$carrinho = new CarrinhoCompra();
echo "<h4>Pedido Iniciado</h4>";
echo "<pre>";
print_r($pedido);
echo "<pre>";

$pedido->getCarrinhoCompra()->adicionarItem($item1);
$pedido->getCarrinhoCompra()->adicionarItem($item2);

echo "<h4>Pedido com items</h4>";
echo "<pre>";
print_r($pedido);
echo "<pre>";

// -----------------------

echo "<h4>Itens do carrinho</h4>";
echo "<pre>";
print_r($pedido->getCarrinhoCompra()->getItens());
echo "<pre>";

echo "<h4>Valor do pedido</h4>";
echo "<pre>";
$total = 0;
foreach($pedido->getCarrinhoCompra()->getItens() as $key => $item) {
    $total += $item->getValor();
}
echo $total;

echo "<h4>Carrinho está valido?</h4>";
echo $pedido->getCarrinhoCompra()->validarCarrinho();

echo "<h4>Status pedido</h4>";
echo $pedido->getStatus();

echo "<h4>Confirmar pedido</h4>";
echo $pedido->confirmar();

echo "<h4>Status pedido</h4>";
echo $pedido->getStatus();


echo "<h4>Envio de email</h4>";
if($pedido->getStatus() == "confirmado") {
    echo EmailService::dispararEmail();
}