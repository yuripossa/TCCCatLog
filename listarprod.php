<html>
	<head>
		<title>Listar</title>
		<meta charset="UTF-8" />
	</head>
	<body>
<?php
	$busca = $_POST['busca'];
		//iniciando a conexão com o banco de dados 
		include "conexao.php";

		//criando a query de consulta à tabela criada 
		$sql = mysqli_query($cx, "SELECT * FROM produto where descricao like '%$busca'") or die( 
		  mysqli_error($cx) //caso haja um erro na consulta 
		);

		//pecorrendo os registros da consulta. 
		while($aux = mysqli_fetch_assoc($sql)) { 
		  echo "-----------------------------------------<br />"; 
		  echo "Codigo:".$aux["ID"]."<br />"; 
		  echo "Descricao:".$aux["descricao"]."<br />";
		  echo "Preço:".$aux["preco"]."<br />"; 
		  echo "Tipo:".$aux["tipo"]."<br />";
		}
?>
</body>
</html>