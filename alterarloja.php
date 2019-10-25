<?php
    session_start();
?>

<html>
	<head>
		<meta charset='UTF-8'>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Alterar Loja</title>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,900,900i" rel="stylesheet">
        <link href='css/formulario-loja.css' rel='stylesheet' type='text/css'>
        <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="icon" href="images/minicat.png">  
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <!-- Adicionando JQuery -->
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous">
        </script>
        <!-- Adicionando Javascript -->
        <script type="text/javascript" >

            $(document).ready(function() {

                function limpa_formulário_cep() {
                    // Limpa valores do formulário de cep.
                    $("#rua").val("");
                    $("#bairro").val("");
                    $("#cidade").val("");
                    $("#uf").val("");
                }
                
                //Quando o campo cep perde o foco.
                $("#cep").blur(function() {

                    //Nova variável "cep" somente com dígitos.
                    var cep = $(this).val().replace(/\D/g, '');

                    //Verifica se campo cep possui valor informado.
                    if (cep != "") {

                        //Expressão regular para validar o CEP.
                        var validacep = /^[0-9]{8}$/;

                        //Valida o formato do CEP.
                        if(validacep.test(cep)) {

                            //Preenche os campos com "..." enquanto consulta webservice.
                            $("#rua").val("...");
                            $("#bairro").val("...");
                            $("#cidade").val("...");
                            $("#uf").val("...");

                            //Consulta o webservice viacep.com.br/
                            $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                                if (!("erro" in dados)) {
                                    //Atualiza os campos com os valores da consulta.
                                    $("#rua").val(dados.logradouro);
                                    $("#bairro").val(dados.bairro);
                                    $("#cidade").val(dados.localidade);
                                    $("#uf").val(dados.uf);
                                } //end if.
                                else {
                                    //CEP pesquisado não foi encontrado.
                                    limpa_formulário_cep();
                                    alert("CEP não encontrado.");
                                }
                            });
                        } //end if.
                        else {
                            //cep é inválido.
                            limpa_formulário_cep();
                            alert("Formato de CEP inválido.");
                        }
                    } //end if.
                    else {
                        //cep sem valor, limpa formulário.
                        limpa_formulário_cep();
                    }
                });
            });
        </script>       
	</head>
	<body class="text-center">
        <div>
    		<form class="form-loja" name="form1" method="post" action="alterarloja1.php">
    			<a href='index.php' title='Ei, clique aqui para voltar ao inicio'>
                    <img class="mb-1" src="images/cat.png" alt="" width="72" height="72">
                </a>
                <p class="h3 mb-3 font-weight-normal">Altere os dados de sua loja</p>
                <p class="h5 mb-2 font-weight-normal">Dados Essenciais</p>
    			<?PHP 
                  $cod = $_SESSION['ID'];
                  $cx = mysqli_connect("localhost","root","","TCC");
                    $db = mysqli_select_db($cx,"TCC");
                    $sql = mysqli_query($cx,"SELECT * FROM loja where COD_USU = '$cod'" ) or die( mysql_error($cx));
                    $con = mysqli_fetch_array($sql);
    					echo "<input class='sr-only' type='hidden' name='cod' value='$con[ID]'>";
                        echo"
    						<div class='form-row'>
                    			<div class='col-md-12 mb-1'>
                        			<label class='sr-only'>Nome:</label>
                        			<input class='form-control' type='text' name='nome' value='$con[nome]' size='20' maxlength='20' required placeholder='Digite o nome da loja...'/>
                    			</div>
    							<div class='col-md-12 mb-1'>
                        			<label class='sr-only'>CNPJ</label>
                        			<input class='form-control' type='text' name='cnpj' value='$con[cnpj]' size='20' maxlength='20' required placeholder='CNPJ: XX.XXX.XXX/YYYY-ZZ'/>
                    			</div>
    			                <div class='col-md-12 mb-1'>
    			                    <label class='sr-only'>E-mail</label>
    			                    <input class='form-control' type='email' name='email' value='$con[email]' size='20' maxlength='20' required readonly placeholder='Digite o e-mail...'/>
    			                </div>
    			                <div class='col-md-12 mb-1'>
    			                    <label class='sr-only'>Telefone</label>
    			                    <input class='form-control' type='text' name='telefone' value='$con[telefone]' size='20' maxlength='16' required placeholder='Digite o telefone...' />
    			                </div>
    			            </div>
    			            <p class='h5 mb-2 font-weight-normal'>Endereço</p>
    			            <div class='form-row'>
    			                <div class='col-md-12 mb-1'>
    			                    <label class='sr-only'>Cep:</label>
    			                    <input class='form-control' name='cep' type='text' id='cep' value='$con[Cep]' size='20' maxlength='9' placeholder='Digite o CEP...'/>
    			                </div>
    			                <div class='col-md-9 mb-1'>
    			                    <label class='sr-only'>Rua:</label>
    			                    <input class='form-control' name='rua' type='text' id='rua' value='$con[Rua]' size='35' placeholder='Rua'/>
    			                </div>
    			                <div class='col-md-3 mb-1'>
    			                    <label class='sr-only'>Número:</label>
    			                    <input class='form-control' name='numero' type='text' id='numero' value='$con[Numero]' size='35' placeholder='Nº'/>
    			                </div>
    			                <div class='col-md-6 mb-1'>
    			                    <label class='sr-only'>Bairro:</label>
    			                    <input class='form-control' name='bairro' type='text' id='bairro' value='$con[Bairro]' size='20' placeholder='Bairro'/>
    			                </div>
    			                <div class='col-md-6 mb-1'>
    			                    <label class='sr-only'>Cidade:</label>
    			                    <input class='form-control' name='cidade' type='text' id='cidade' value='$con[Cidade]' size='20' placeholder='Cidade'/>
    			                </div>
    			                <div class='col-md-12 mb-3'>
    			                    <label class='sr-only'>Estado:</label>
    			                    <input class='form-control' name='uf' type='text' id='uf' value='$con[Estado]' size='2' placeholder='Estado'/>
    			                </div>
    			            </div>";
    			?>
    			<button class="col-md-12 mb-1 btn btn-lg btn-primary btn-block bloja" type="submit" value='alterar'>Alterar</button>
     		</form>
            <form class='form-loja' name="form2" method="post" action="deletaloja.php">
                <?PHP echo("<input type='hidden' name='cod' value='$con[ID]'>");?>
                <button class="col-md-12 mb-1 btn btn-lg btn-primary btn-block bloja" type="submit" name='Deletar' value='deletar'>Deletar</button>
            </form>
            <div class='form-loja'>
                <button class="col-md-12 btn btn-lg btn-primary btn-block bloja" onclick="document.location.href='perfil.html'" type="submit" value='voltar'>Voltar</button>
            </div>
            <p class="mt-5 mb-3 text-muted">© TCC Informática 2019</p>
        </div>
	</body>
</html>