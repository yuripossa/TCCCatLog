<?php
session_start();

include "connection.php";

$msg = false;

if(isset($_FILES['imagem'])){

    $extensao = strtolower(substr($_FILES['imagem']['name'], -4));
    $novo_nome = md5(time()). $extensao;
    $diretorio = "upload/";
    move_uploaded_file($_FILES['imagem']['tmp_name'], $diretorio.$novo_nome);

    $descricao = $_POST["descricao"];
    $preco = $_POST["preco"];
    $tipo = $_POST["tipo"];
    $COD_USU = $_SESSION["ID"];
    $COD_LOJA = $_SESSION["COD_LOJA"];
    $Comando = "insert into produto (descricao, preco, tipo, NOME_IMG, COD_USU, COD_LOJA) values ('$descricao','$preco','$tipo','$novo_nome', '$COD_USU', '$COD_LOJA')";

    mysqli_query($mysqli, $Comando);
}

?>

<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Cadastrar Produto</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,900,900i" rel="stylesheet">
    <link href='css/formulario-produto.css' rel='stylesheet' type='text/css'>
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="icon" href="images/minicat.png">  
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  </head>
  <body class="text-center">
    <form class="form-produto" name="form1" action="produto.php" method="post" enctype="multipart/form-data">
      <a href='index.php' title='Ei, clique aqui para voltar ao inicio'>
        <img class="mb-1" src="images/cat.png" alt="" width="72" height="72">
      </a>
      <p class="h3 mb-3 font-weight-normal">Cadastre um Produto</p>
      <p class="h5 mb-2 font-weight-normal">Dados Essenciais</p>
      <div class="form-row">
        <div class="col-md-12 mb-1">
          <label class="sr-only">Descrição:</label> 
          <input class="form-control" type="text" name="descricao" value="" size="20" required maxlength="20" placeholder="Digite a descrição do produto..." />
        </div>
        <div class="col-md-12 mb-2">
          <label class="sr-only">Preço R$:</label>
          <input class="form-control" type="text" name="preco" value="" size="20" maxlength="20" required placeholder="Digite o preço do produto: R$ 0,00"/>
        </div>
       <div class="col-md-12 mb-2">
          <label class="sr-only">Tipo</label>
          <input class="form-control" type="text" name="tipo" value="" size="20" maxlength="20" required placeholder="(Alimento,Roupa,Calçado)"/>
        </div>
      </div>
        <label class="sr-only" for="imagem">Imagem:</label>
        <input class='mb-3' type="file" name="imagem"/><br/>
        <button class="col-md-12 btn btn-lg btn-primary btn-block bproduto" type="submit" value='CadProd'>Cadastrar</button>
        <button class="col-md-12 btn btn-lg btn-primary btn-block bproduto" type="reset" value='Limpar'>Limpar</button>
        <button class="col-md-12 btn btn-lg btn-primary btn-block bproduto" onclick="document.location.href='perfil.html'" type="submit" value='Voltar'>Voltar</button>
      <p class="mt-5 mb-3 text-muted">© TCC Informática 2019</p>
    </form>    
  </body>
</html>