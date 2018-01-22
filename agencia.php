<?php
/**
 *
 */
class agencia
{
  public $numero;
}


$agencia1=new agencia;
$agencia2=new agencia;

$agencia1->numero= 1234;
$agencia2->numero=5678;


echo "imprimindo agencias";

echo "Primeira agência $agencia1->numero <br>";

echo "Primeira agência $agencia2->numero <br>";
  ?>
