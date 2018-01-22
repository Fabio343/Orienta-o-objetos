<?php
 /**
  *
  */



 class cartao
 {
   public $numero;
   public $validade;

 }

 require 'lib/Carbon.php'; //chamando um arquivo

 use Carbon\Carbon; // chamando uma função do arquivo anterior

$cartao1=new cartao;
$cartao2=new cartao;

$cartao1->numero=111111;
$cartao1->validade=Carbon::createFromDate(2013, 1, 1, 'America/Sao_Paulo');

$cartao2->numero=222222;
$cartao2->validade=Carbon::createFromDate(2014, 1, 1,'America/Sao_Paulo');

echo "Imprimindo dos dados <br>";

echo "Numero do cartão 1: $cartao1->numero <br>".PHP_EOL;
echo "data de validade do cartão  1: {$cartao1->validade->format('d/m/y')} <br>".PHP_EOL;

echo "Numero do cartão 2: $cartao2->numero <br>".PHP_EOL;
echo "data de validade do cartão  2: {$cartao2->validade->format('d/m/y')} <br>".PHP_EOL;


 ?>
