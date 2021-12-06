<?php

require __DIR__."/vendor/autoload.php";

use App\Leitor;

$leitor = new Leitor();
$leitor->setDiretorio(__DIR__.'/arquivos');
$leitor->setArquivo('dados.txt');
echo "<pre>";
print_r($leitor->lerArquivo());
echo "</pre>";

$leitor2 = new Leitor();
$leitor2->setDiretorio(__DIR__.'/arquivos');
$leitor2->setArquivo('dados.csv');
echo "<pre>";
print_r($leitor2->lerArquivo());
echo "</pre>";
