<?php

namespace App;

use App\Arquivo;

class Leitor {
    private  $diretorio;
    private  $arquivo;

    public function __construct()
    {
        $this->diretorio = '';
        $this->arquivo = '';

    }
    public function getDiretorio() : string
    {
        return $this->diretorio;
    }
    public function getArquivo() : string
    {
        return $this->arquivo;
    }
    public function setDiretorio(string $diretorio) : void
    {
        $this->diretorio = $diretorio;
    }
    public function setArquivo(string $arquivo) : void
    {
        $this->arquivo = $arquivo;
    }
    public function lerArquivo()
    {
        $caminho = $this->getDiretorio(). '/' . $this->getArquivo();
        $extensao = explode('.',$this->getArquivo());
        $classe ='\App\extrator\\'. ucfirst($extensao[1]);

        return call_user_func_array(
            [
                new $classe,
                'lerArquivo'
            ],
            [
                $caminho
            ]);

//        $caminho = $this->getDiretorio(). '/' . $this->getArquivo();
//        $arquivo = new Arquivo();
//        $extensao = explode('.',$this->getArquivo());
//
//        if ($extensao[1] == 'csv'){
//            $arquivo->lerArquivoCsv($caminho);
//        }
//        elseif ($extensao[1] == 'txt'){
//            $arquivo->lerArquivoTxt($caminho);
//
//        }
//        return $arquivo->getDados();
    }
}