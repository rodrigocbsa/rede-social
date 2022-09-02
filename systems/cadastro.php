<?php
require('conexao.php');

if(isset($_POST['email']) && isset($_POST['senha'])){
	$email = $_POST['email'];
	$senha = $_POST['senha'];

	$result = $pdo->prepare("INSERT INTO web (email,  senha) VALUES (:email, :senha)");

	try{
		$result->bindParam(':email',$email);
		$result->bindParam(':senha',$senha);
		$result->execute();

		if($result>=0){
			echo "Verifique a sua caixa de email!";
		}
	}catch(PDOException $e){
		echo "Email já cadastrado!";
	}
} 

?>