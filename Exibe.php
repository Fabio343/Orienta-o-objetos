<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exibe as informaçẽos</title>
  </head>
  <body>
    <?php
      require 'cliente2.php';

      $cliente=new Cliente();
      $cliente->nome=$_POST['nome'];
      $cliente->email=$_POST['email'];
    
     ?>
    <h2>Cliente</h2>

    <h4>Nome:<?= $cliente->nome ?></h4>
    <h4>Email:<?= $cliente->email ?></h4>


  </body>
</html>
