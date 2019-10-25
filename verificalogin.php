<?php 
	$email = $_POST["email"];
	$fazlogin = $_POST["fazlogin"];
	$senhausu = $_POST["senha"];
	include "connection.php";


	$verifica = mysqli_query($mysqli,"SELECT * FROM usuario WHERE email ='$email' AND senha = '$senhausu'") or die("erro ao selecionar");

	  $resultadobusca = mysqli_fetch_array($verifica);
	  if (mysqli_num_rows($verifica)<=0){
	        echo"<script language='javascript' type='text/javascript'>
	        alert('Login e/ou senha incorretos');window.location
	        .href='login.html';</script>";
	      
	  }else{

	       	session_start();
		   	$_SESSION["email"] = $email;
		   	$_SESSION["senha"] = $senha;
		   	$_SESSION["ID"] = $resultadobusca['ID'];
		   	$_SESSION["COD_LOJA"] = $resultadobusca['COD_LOJA'];
		   	echo"<script language='javascript' type='text/javascript'>
	        alert('$_SESSION[COD_LOJA]');</script>";
		   	header("location:index.php");
	   
	  }
	  

?>