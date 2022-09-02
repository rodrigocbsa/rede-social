<?php
include('conexao.php');

if(isset($_POST['logar'])){
	//PEGAR DADOS
	$email = trim(strip_tags($_POST['email']));
	$senha = trim(strip_tags($_POST['senha']));

	//RECUPERAR
	$select = "SELECT * FROM web WHERE BINARY email=:email AND senha=:senha";
	$result = $pdo->prepare($select);
	$result->bindParam(':email',$email,PDO::PARAM_STR);
	$result->bindParam(':senha',$senha,PDO::PARAM_STR);
	$result->execute();

	$contar = $result->rowCount();

	if($contar>0){
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	$_SESSION['email'] = $email;
	$_SESSION['senha'] = $senha;

	header('Location: home.php');
	}
	else{
		echo "Crie uma conta para entrar.";
	}
}
?>