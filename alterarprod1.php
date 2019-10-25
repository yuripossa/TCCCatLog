<html>
	<head>
		<title>Alterar</title>
		<meta charset="UTF-8" />
	</head>
	<body>
		<?PHP
			$cod = $_POST["cod"];
			$descricao = $_POST["descricao"];
			$preco = $_POST["preco"];
			$tipo = $_POST["tipo"];
			$Cone = mysqli_connect("localhost" ,"root" ,"" ,"TCC") or die ("Mensagem");
			$Comando = "update produto set descricao='$descricao',preco='$preco', tipo='$tipo' where ID='$cod'";
			echo($Comando);
			if(mysqli_query($Cone,$Comando)){
				echo("Atualizado com sucesso");
			}else{
				echo("Erro ao alterar");
			}
			header("location: alterarprod.php"); die('Não ignore meu cabeçalho...');
		?>
	</body>
	</html>

