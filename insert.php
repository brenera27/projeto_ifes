<?php 
session_start(); 

include("conexao.php");


$tabela = $_SESSION['tabela'];
$texto = @$_POST['texto'];

	
if(strlen($texto) < 17){
	header('Location: inserir.php');
}else{
	$sql =  "INSERT INTO `$tabela` (`texto`) VALUES ('$texto');";
	$mysqli->query($sql);	
	header('Location: index.php');
		
}
?>
