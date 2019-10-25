<html>
	<head>
		<title>Deletar</title>
		<meta charset="UTF-8" />
	</head>
	<body>
		<?PHP
			$cod = $_POST["cod"];
			$Cone = mysqli_connect("localhost" ,"root" ,"" ,"TCC") or die ("Mensagem");
			$Comando = "delete from produto where ID='$cod'";
			echo($Comando);
			if(mysqli_query($Cone,$Comando)){
				echo("Deletado  com sucesso");
			}else{
				echo("Erro ao deletar");
			}
			header("location: buscarprod.html"); die('Não ignore meu cabeçalho...');
		?>
	</body>
	</html>
