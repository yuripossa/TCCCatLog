<?php
	session_start();
?>
<html>
	<head>
		<title>Cadastrar</title>
		<meta charset="UTF-8" />
	</head>
	<body>
		<?PHP
			$descricao = $_POST["descricao"];
			$preco = $_POST["preco"];
			$tipo = $_POST["tipo"];
			//$imagem = $_FILES["imagem"];

			include "connection.php";

            $msg = false;

            if(isset($_FILES['imagem'])){

                $extensao = strtolower(substr($_FILES['imagem']['name'], -4));
               	echo $novo_nome = md5(time()). $extensao;
                $diretorio = "upload/";
                move_uploaded_file($_FILES['imagem']['tmp_name'], $diretorio.$novo_nome);

            }

        	echo $Comando = "insert into produto (descricao, preco, tipo, NOME_IMG) values ('$descricao','$preco','$tipo','$novo_nome') WHERE COD_LOJA = '$_SESSION[COD_LOJA]'";


			if(mysqli_query($mysqli,$Comando)){
                $msg = "Arquivo enviado com sucesso";
			}else{
                $msg = "Falha ao enviar arquivo";
			}

			//header("location: produto1.php"); die('Não ignore meu cabeçalho...');
		?>
	</body>
</html>