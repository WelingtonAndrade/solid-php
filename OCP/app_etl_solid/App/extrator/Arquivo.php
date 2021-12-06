<?php

namespace App\extrator;

class Arquivo {

    private $dados = [];

    public function setDados(string $nome,string $cpf, string $email) : void
    {
        $this->dados[] = [
            'nome'  =>  iconv('iso8859-1','utf-8', $nome),
            'cpf'   =>  $cpf,
            'email' =>  $email
        ];
    }
    public function getDados(): array{
        return $this->dados;
    }


}