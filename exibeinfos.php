<?php
// definições de host, database, usuário e senha
$servidor = "localhost";
$usuario = "root";
$senha = "senha";
$banco = "Verao";
require 'cliente2.php';
// conecta ao banco de dados
$conexao = mysql_pconnect($servidor, $usuario, $senha) or trigger_error(mysql_error(),E_USER_ERROR);
// seleciona a base de dados em que vamos trabalhar
mysql_select_db($banco, $conexao);
// cria a instrução SQL que vai selecionar os dados
$query = "SELECT  nome, email FROM clientes";
// executa a query
$dados = mysql_query($query, $conexao) or die(mysql_error());
// transforma os dados em um array
$linha = mysql_fetch_assoc($dados);
// calcula quantos dados retornaram
$total = mysql_num_rows($dados);
?>

<html>
	<head>
	<title>Exemplo</title>
</head>
<body>
<?php
	// se o número de resultados for maior que zero, mostra os dados
	if($total > 0) {
		// inicia o loop que vai mostrar todos os dados
		do {
?>
			<p><?=$linha['nome']?> / <?=$linha['email']?></p>
<?php
		// finaliza o loop que vai mostrar os dados
		}while($linha = mysql_fetch_assoc($dados));
	// fim do if
	}
?>
</body>
</html>
<?php
// tira o resultado da busca da memória
mysql_free_result($dados);
?>
