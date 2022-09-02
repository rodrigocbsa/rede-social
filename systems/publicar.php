<?php
include("systems/conexao.php");

if(isset($_POST['publicar'])){
	$descricao = trim(strip_tags($_POST['descricao']));
	$imagem = trim(strip_tags($_POST['imagem']));
	
	$insert = "INSERT INTO web_postagens (descricao, imagem) VALUES (:descricao, :imagem)";

try{
	$result = $pdo->prepare($insert);
	$result->bindParam(':descricao',$descricao,PDO::PARAM_STR);
	$result->bindParam(':imagem',$imagem,PDO::PARAM_STR);
	$result->execute();

	$contar = $result->rowCount();

	if($contar>0){
		echo "Sua obra de arte for divulgada.";
	}
	else{
		echo "Ocorreu um erro.";
	}
}
catch(PDOException $e){
	echo "Ocorreu um erro grave.";
}
}
?>