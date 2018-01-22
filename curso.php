<?php

class curso

{
public $nome; // obrigatorio usar public, private ou protected
public $sala;
}

 $curso=new curso(); // criando novo objeto

 $curso->nome="algoritmos";
 $curso->sala="B05";

 echo " Nome do curso realizado: $curso->nome".PHP_EOL;

 echo " sala do curso: $curso->sala".PHP_EOL;

 ?>
