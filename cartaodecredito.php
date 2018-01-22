<?php
 /**
  *
  */
 class cartao
 {
   public $numero;
   public $validade;

 }

$cartao1=new cartao;
$cartao2=new cartao;

$cartao1->numero=111111;
$cartao1->validade="01/01/2013";

$cartao2->numero=222222;
$cartao2->validade="01/01/2014";

echo "Imprimindo dos dados <br>";

echo "Numero do cartão 1: $cartao1->numero <br>".PHP_EOL;
echo "data de validade do cartão  1: $cartao1->validade <br>".PHP_EOL;

echo "Numero do cartão 2: $cartao2->numero <br>".PHP_EOL;
echo "data de validade do cartão  2: $cartao2->validade <br>".PHP_EOL;


 ?>
