<?php
include 'conexao.php';
include 'login.php';

$email = $_SESSION['email'];

if(isset($_POST['salvar'])){

	$usuario = trim(strip_tags($_POST['usuario']));
	$tagUsuario = trim(strip_tags($_POST['tag']));
	$frase = trim(strip_tags($_POST['frase']));
	$job = trim(strip_tags($_POST['job']));

	$insert = "INSERT INTO web (usuario, tag_usuario, frase, job) VALUES (:usuario, :tag, :frase, :job) WHERE email = :email";

	$result = $pdo->prepare($insert);
	$result->bindParam(':usuario',$usuario);
	$result->bindParam(':tag',$tagUsuario);
	$result->bindParam(':frase',$frase);
	$result->bindParam(':job',$job);
	$result->bindParam(':email',$email);
	$result->execute();

	$contar = $result->rowCount();

	if($contar>0){
	$usuario = $_POST['usuario'];
	$tagUsuario = $_POST['tag'];
	$frase = $_POST['frase'];
	$job = $_POST['job'];

	$_SESSION['usuario'] = $usuario;

	header('Location: profile.php');
	}else{
		echo 'AAAAAAAAAAAAAAAAAH';
	}
}
?>