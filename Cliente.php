<?php
/**
 *
 */ //criando dois objetos clientes  com a classe definida por nome e codigo
class Cliente
{
  public $nome;
  public $codigo;
}

$client1= new Cliente();

$client1->nome="Rafael Cosentino";
$client1->codigo="codigo 1";

$client2= new Cliente();

$client2->nome="Jonas Hirata";
$client2->codigo="codigo 2";

echo "Nome do cliente 1: $client1->nome <br>".PHP_EOL;
echo "codigo do cliente 1: $client1->codigo <br>".PHP_EOL;

echo "Nome do cliente 2: $client2->nome <br>".PHP_EOL;
echo "codigo do cliente 2: $client2->codigo <br>".PHP_EOL;

 ?>
