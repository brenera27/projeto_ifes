<?php 
	session_start(); 
	include("conexao.php");
	
	$sentimento = @$_GET["enviar"];
	$pessoa = $_SESSION['validador'];
	$id = $_SESSION['id'];
	$tabela = $_SESSION['tabela'];

	if($sentimento == "corrigir"){
		$id = $id - 1;
		$sql =  "UPDATE `$tabela` SET `$pessoa` = NULL WHERE ID = '$id';";
		$mysqli->query($sql);	
	}else{
		$sql =  "UPDATE `$tabela` SET `$pessoa` = '$sentimento' WHERE ID = '$id';";
		$mysqli->query($sql);	
	}

	

	header('Location: validacoes.php?validador='.$pessoa.'&enviar='.$tabela);


?>
