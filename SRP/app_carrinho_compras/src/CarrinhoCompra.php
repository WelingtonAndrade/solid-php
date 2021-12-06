<?php
namespace App;

class CarrinhoCompra{
    //Atributos
    private $itens;
    private $status;
    private $valorTotal;

    //Metodos

    public function __construct(){
        $this->itens = [];
        $this->status = 'aberto';
        $this->valorTotal = 0;
    }

    public function exibirItens(){
        print_r($this->itens);
    }
    public function adicionarItem(string $item,float $valor){
        $this->itens[] = ["item" => $item, "valor" => $valor];
        $this->valorTotal += $valor;
        return true;
    }
    public function exibirValorTotal(){
        return $this->valorTotal;
    }
    public function exibirStatus(){
        return $this->status;
    }
    public function confirmarPedido(){
        if ($this->validarCarrinho()){
            $this->status = 'confirmado';
            $this->enviarEmailComfirmacao();
            return true;
        }
        return false;
    }
    public function enviarEmailComfirmacao(){
        echo "<br/> ... Enviado Confirmação de Compra...<br/>";
    }
    public function validarCarrinho(){
        return count($this->itens) > 0;
    }
}