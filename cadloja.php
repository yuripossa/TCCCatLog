<html>
	<head>
		<title>Cadastrar</title>
		<meta charset="UTF-8" />
	</head>
	<body>
		<?PHP
			session_start();
			$COD_USU = $_SESSION['ID'];
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
			include "connection.php";
			$Comando = "insert into loja (nome, cnpj, email, telefone, Cep, Rua, Numero, Bairro, Cidade, Estado, COD_USU) values ('$nome','$cnpj','$email', '$telefone', '$Cep', '$Rua', '$Numero', '$Bairro', '$Cidade', '$Estado', '$COD_USU')";

				

			if(mysqli_query($mysqli, $Comando)){
				echo("Cadastrado com sucesso");
				$comandobusca = mysqli_query($mysqli,"select * from loja order by ID desc limit 1") or die("erro ao selecionar");
				$resultadobusca = mysqli_fetch_array($comandobusca);
				$comandobusca = $resultadobusca['ID'];
				$Comandousu = "update usuario set COD_LOJA = '$comandobusca' where ID='$COD_USU'";

				$_SESSION['codigo_loja'] = $resultadobusca['ID'];
				"<script> alert('$comandobusca');</script>";
				
				
				mysqli_query($mysqli,$Comandousu);
			}else{
				echo("Erro ao cadastrar");
			}
			
			header("location:loja.html"); die('Não ignore meu cabeçalho...');
		?>
	</body>
</html>