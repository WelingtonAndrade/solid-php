<?php

namespace App;

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
    public function lerArquivoCsv(string $caminho) : void {

        $handle = fopen($caminho, 'r');

        while (($linha = fgetcsv($handle, 1000, ';')) !== false){
           $this->setDados(
               $linha[0],
               $linha[1],
               $linha[2]
           );
        }
        fclose($handle);
    }
    public function lerArquivoTxt(string $caminho) : void {

        $handle = fopen($caminho, 'r');
        while (!feof($handle)){
            $linha = fgets($handle);
            $this->setDados(
                substr($linha,11 ,30),
                substr($linha,0 ,11),
                substr($linha,41 ,50)
            );
        }
        fclose($handle);
    }
}