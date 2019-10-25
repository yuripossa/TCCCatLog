<html>
	<head>
		<title>Cadastrar</title>
		<meta charset="UTF-8" />
	</head>
	<body>
		<?PHP
			$nomeusu = $_POST["nomeusu"];
			$senha = $_POST["senha"];
			$email = $_POST["email"];
			$telefone = $_POST["telefone"];
			$Cep = $_POST["cep"];
			$Rua = $_POST["rua"];
			$Numero = $_POST["numero"];
			$Bairro = $_POST["bairro"];
			$Cidade = $_POST["cidade"];
			$Estado = $_POST["uf"];
			$Cone = mysqli_connect("localhost" ,"root" ,"" ,"TCC") or die ("Mensagem");
			$Comando = "insert into usuario (nomeusu, senha, email, telefone, Cep, Rua, Numero, Bairro, Cidade, Estado) values ('$nomeusu','$senha','$email', '$telefone', '$Cep', '$Rua', '$Numero','$Bairro', '$Cidade', '$Estado')";
            $verifica = mysqli_query($Cone,$Comando) or die("erro ao selecionar");

			if($verifica){
				echo("Cadastrado com sucesso");
			}else{
				echo("Erro ao cadastrar");
			}
			header("location:index.html"); die('Não ignore meu cabeçalho...');
		?>
	</body>
</html>

