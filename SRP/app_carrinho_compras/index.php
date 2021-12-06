<?php

require __DIR__."/vendor/autoload.php";


use App\CarrinhoCompra;

    $carrinho1 = new CarrinhoCompra();
    print_r($carrinho1->exibirItens());
    echo "<br/>";
    echo "Valor Total: ". $carrinho1->exibirValorTotal();
    echo "<br/>";
    echo "Status: " . $carrinho1->exibirStatus();
    $carrinho1->adicionarItem('bicicleta',600.00);
    $carrinho1->adicionarItem('geladeira',950.00);
    $carrinho1->adicionarItem('tapete',100.00);
    echo "<br/>";
    print_r($carrinho1->exibirItens());
    echo "<br/>";


    echo "Valor Recalculado R$ " . $carrinho1->exibirValorTotal();
    echo "Status: " . $carrinho1->exibirStatus();

    if ( $carrinho1->confirmarPedido()){
        echo "Pedido Realizado com Sucesso!";
    }
    else{
        echo 'Erro na confirmação do pedido . Carrinho não possui Itens';
    }
    echo "Status: " . $carrinho1->exibirStatus();
