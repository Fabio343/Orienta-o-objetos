<?php
/**
 *
 */
class conta
{
  public $numero;
  public $saldo;
  public $limite;

}

$novaconta=new conta();

$novaconta->numero=40028922;
$novaconta->saldo=1500.00;
$novaconta->limite=5000.00;

echo "numero da conta: $novaconta->numero <br>";
echo "saldo da conta: $novaconta->saldo <br>";
echo "limite da conta: $novaconta->limite <br>";

  ?>
