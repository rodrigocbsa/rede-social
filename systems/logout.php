<?php
if(isset($_REQUEST['sair'])){
	session_destroy();
	session_unset($_SESSION['email']);
	session_unset($_SESSION['senha']);

	header('Location: index.php');
	exit();
}
?>