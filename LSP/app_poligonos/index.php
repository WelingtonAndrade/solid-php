<?php

require __DIR__."/vendor/autoload.php";

use App\Retangulo;
use App\Quadrado;

$retangulo = new Retangulo();
$retangulo->setAltura(10);
$retangulo->setLargura(20);
echo $retangulo->getArea();

$quadrado = new Quadrado();
$quadrado->setLargura(15);
$quadrado->setAltura(12);
echo $quadrado->getArea();