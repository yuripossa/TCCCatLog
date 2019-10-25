<?php
	session_start();
?>

<html>
	<head>
		<meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <meta name="description" content="">
	    <meta name="author" content="">
	    <title>Alterar Produto</title>
	    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,900,900i" rel="stylesheet">
	    <link href='css/formulario-produto.css' rel='stylesheet' type='text/css'>
	    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	    <link rel="icon" href="images/minicat.png">  
	    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	</head>
	<body class='text-center'>
		<div>
			<form class="form-produto" name="form1" method="post" action="alterarprod1.php">
				<a href='index.php' title='Ei, clique aqui para voltar ao inicio'>
	        		<img class="mb-1" src="images/cat.png" alt="" width="72" height="72">
	      		</a>
	      		<p class="h3 mb-3 font-weight-normal">Alterar Produto</p>
	      		<p class="h5 mb-2 font-weight-normal">Dados Essenciais</p>
				<?PHP
				  $cod = $_SESSION["COD_LOJA"];
				  $cx = mysqli_connect("localhost" ,"root" ,"" ,"TCC");
						$db = mysqli_select_db($cx, "TCC");
						$sql = mysqli_query($cx, "SELECT * FROM produto where id = $cod" ) or die( mysqli_error($cx));
						$con = mysqli_fetch_array($sql);
						echo" <input class='sr-only' type='hidden' name='cod' value='$con[ID]'>";
						echo"
							<div class='form-row'>
		        				<div class='col-md-12 mb-1'>
		     					<label class='sr-only'>Descrição:</label> 
		          						<input class='form-control' type='text' name='descricao' value='$con[descricao]' size='20' required maxlength='20' placeholder='Digite a descrição do produto...'' />
		        				</div>";
						echo"
								<div class='col-md-12 mb-1'>
			          				<label class='sr-only'>Preço R$:</label>
			          				<input class='form-control' type='text' name='preco' value='$con[preco]' size='20' maxlength='20' required placeholder='Digite o preço do produto: R$ 0,00'/>
			        			</div>";
			        	echo"
			        			<div class='col-md-12 mb-1'>
			        				<label class='sr-only'>Tipo : </label>
			        				<input class='form-control' type='text' name='tipo' value='$con[tipo]' size='20' maxlength='20' required>
			        			</div>";
					?>
				<button class="col-md-12 mb-1 btn btn-lg btn-primary btn-block bproduto" type="submit" value='alterar'>Alterar</button>
	 		</form>
			<form class='form-produto' name="form2" method="post" action="deletaprod.php">
				<?PHP echo("<input type='hidden' name='cod' value='$con[ID]'>");?>
			 	<button class="col-md-12 mbbtn btn-lg btn-primary btn-block bproduto" type="submit" value='deletar'>Deletar</button>
			</form>
			<div class='form-produto'>
				<button class="col-md-12 mbbtn btn-lg btn-primary btn-block bproduto" onclick="document.location.href='perfil.html'" type="submit" value='Voltar'>Voltar</button>
			</div>
			<p class="mt-5 mb-3 text-muted">© TCC Informática 2019</p>
		</div>
	</body>
</html>