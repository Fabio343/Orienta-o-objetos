<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Cliente</title>
  </head>
  <body>
    <?php
      require 'cliente2.php';
      $servidor = "localhost";
      $usuario = "root";
      $senha = "senha";
      $banco = "Verao";
      $conexao = new mysqli($servidor, $usuario, $senha, $banco)
        or die("Erro de conexao: $conexao->connect_error");
      $cliente = new Cliente();
      $cliente->nome = $_POST['nome'];
      $cliente->email = $_POST['email'];




      $sql = "INSERT INTO clientes (nome, email) values(?, ?)";
      $comando=$conexao->prepare($sql);
      $comando->bind_param("ss", $cliente->nome, $cliente->email);

      $saida=$comando->execute();
    ?>

    <h1>Cliente</h1>

    <?php if($saida === true) { ?>
      <h3>Cliente salvo com sucesso</h3>
      <?php echo $_POST['nome']; ?>
      <?php echo $_POST['email']; ?>
    <?php } else {
      //var_dump($conexao);
      ?>
    <h3>Erro não foi possivel adicionar o cliente no sistema de dados: <?= $conexao->error ?> </h3>
    <?php }
      $comando->close();
      $conexao->close();
     ?>
  </body>
</html>
