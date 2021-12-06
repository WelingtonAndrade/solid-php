<?php

require __DIR__."/vendor/autoload.php";

use App\CarrinhoCompra;
use App\Pedido;
use App\Item;
use App\EmailService;

echo "<h3> Aplicando SRP</h3><hr>";

$pedido1 =  new Pedido();

$item1 = new Item();
$item2 = new Item();
//----------------------
$item1->setDescricao('Televisão 32 Polegadas');
$item1->setValor(1000.50);
//-----------------------------------------------------
$item2->setDescricao('Caneca Git');
$item2->setValor(30.00);
//-----------------------------------------------------
echo "<h3> Pedido Iniciado</h3><br/>";
echo "<pre>";
print_r($pedido1);
echo "</pre><hr>";
$pedido1->getCarrinhoCompra()->adicionarItem($item1);
$pedido1->getCarrinhoCompra()->adicionarItem($item2);
echo "<h3> Pedido com intens</h3><br/>";
echo "<pre>";
print_r($pedido1);
echo "</pre><hr>";
echo "<h3> Itens do Carrinho</h3><br/>";
echo "<pre>";
print_r($pedido1->getCarrinhoCompra()->getItens());
echo "</pre><hr>";

echo "<h3> Valor do pedido</h3><br/>";
$total = 0;
foreach ($pedido1->getCarrinhoCompra()->getItens() as $key => $item){
    $total += $item->getValor();
}
echo "Valor Total: R$ " . $total . "<hr>";


echo "<h3> Carrinho está Valido?</h3><br/>";
print_r($pedido1->getCarrinhoCompra()->validarCarrinho());
echo "<hr>";

echo "<h3> Status Pedido?</h3><br/>";
print_r($pedido1->getStatus());
echo "<hr>";

echo "<h3> Carrinho está Valido?</h3><br/>";
print_r($pedido1->confirmar());
echo "<hr>";

echo "<h3> Email</h3><br/>";
    if ($pedido1->getStatus() == 'confirmado'){
        echo EmailService::dispararEmail();
    }
    else{
        echo 'Confirme seu pedido';
    }
echo "<hr>";


































//    $carrinho1 = new CarrinhoCompra();
//    print_r($carrinho1->exibirItens());
//    echo "<br/>";
//    echo "Valor Total: ". $carrinho1->exibirValorTotal();
//    echo "<br/>";
//    echo "Status: " . $carrinho1->exibirStatus();
//    $carrinho1->adicionarItem('bicicleta',600.00);
//    $carrinho1->adicionarItem('geladeira',950.00);
//    $carrinho1->adicionarItem('tapete',100.00);
//    echo "<br/>";
//    print_r($carrinho1->exibirItens());
//    echo "<br/>";
//
//
//    echo "Valor Recalculado R$ " . $carrinho1->exibirValorTotal();
//    echo "Status: " . $carrinho1->exibirStatus();
//
//    if ( $carrinho1->confirmarPedido()){
//        echo "Pedido Realizado com Sucesso!";
//    }
//    else{
//        echo 'Erro na confirmação do pedido . Carrinho não possui Itens';
//    }
//    echo "Status: " . $carrinho1->exibirStatus();
