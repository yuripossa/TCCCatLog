<html>
	<head>
		<title>Cadastrar</title>
		<meta charset="UTF-8" />
	</head>
	<body>
<?php
		//iniciando a conexão com o banco de dados 
		include "conexao.php";

		//criando a query de consulta à tabela criada 
		$sql = mysqli_query($cx, "SELECT * FROM usuario") or die( 
		  mysqli_error($cx) //caso haja um erro na consulta 
		);

		//pecorrendo os registros da consulta. 
		while($aux = mysqli_fetch_assoc($sql)) { 
		  echo "-----------------------------------------<br />";
		  echo "Codigo:".$aux["ID"]."<br />";
		  echo "Nome Usuario:".$aux["nomeusu"]."<br />"; 
		  echo "Senha:".$aux["senha"]."<br />";
		  echo "Email:".$aux["email"]."<br />"; 
		  echo "Telefone:".$aux["telefone"]."<br />";
		  echo "CEP:".$aux["Cep"]."<br />";
		  echo "Rua:".$aux["Rua"]."<br />";
		  echo "Numero:".$aux["Numero"]."<br />";
		  echo "Complemento:".$aux["Complemento"]."<br />";
		  echo "Bairro:".$aux["Bairro"]."<br />";
		  echo "Cidade:".$aux["Cidade"]."<br />";
		  echo "Estado:".$aux["Estado"]."<br />";
		}

?>
</body>
</html>