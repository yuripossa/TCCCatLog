<?PHP
	session_start();
	session_destroy($_SESSION['email']);
	unset($_SESSION['email']);
	header('location:index.html');
?>