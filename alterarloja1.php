<html>
	<head>
		<title>Alterar</title>
		<meta charset="UTF-8" />
	</head>
	<body>
		<?PHP
			$cod = $_POST["cod"];
			$nome = $_POST["nome"];
			$cnpj = $_POST["cnpj"];
			$email = $_POST["email"];
			$telefone = $_POST["telefone"];
			$Cep = $_POST["cep"];
			$Rua = $_POST["rua"];
			$Numero = $_POST["numero"];
			$Bairro = $_POST["bairro"];
			$Cidade = $_POST["cidade"];
			$Estado = $_POST["uf"];
			$Cone = mysqli_connect("localhost" ,"root" ,"" ,"TCC") or die ("Mensagem");
			$Comando = "update loja set nome='$nome',cnpj='$cnpj', email='$email', telefone='$telefone', Cep='$Cep', Rua='$Rua', Numero='$Numero',Bairro='$Bairro', Cidade='$Cidade', Estado='$Estado' where ID='$cod'";
			echo($Comando);
			if(mysqli_query($Cone,$Comando)){
				echo("Atualizado com sucesso");
			}else{
				echo("Erro ao alterar");
			}
			header("location: alterarloja.php"); die('Não ignore meu cabeçalho...');
		?>
	</body>
	</html>
