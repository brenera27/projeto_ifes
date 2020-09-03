<?php
session_start(); 
include("conexao.php");

$arquivo = "arquivo/sentencas.txt";
$tabela = $_SESSION['tabela'];
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

		<title>Leitura</title>
		<link rel="stylesheet" type="text/css" href="estiloLeitura.css">
	</head>
	<body>
		<div class="corpo"> 
			<nav aria-label="breadcrumb">
			 	<ol class="breadcrumb">
			  	<li class="breadcrumb-item active" aria-current="page"><img src="img/logoll.png" width="234" height="77" ></li>
			</nav>
			<br>
			<?php  
				if (!file_exists($arquivo)){
					echo nl2br("<center><h3>Arquivo não encontrado!</h3></center>\n\n");
				}else{
					echo nl2br ("<center><h3>Aquivos enviados com sucesso!</h3></center>\n\n");

					$fp = fopen($arquivo, "r");

					while (!feof($fp)){
						$current_line = fgets ($fp);
							
						if(!empty($current_line)){
							$consulta = "INSERT INTO `$tabela` (`TEXTO`) VALUES ('$current_line');";
							$con = $mysqli -> query($consulta) or die ($mysqli->error);
						}
					}
					fclose($fp);
				}
			?>
			<center>
				<a class="btn btn-secondary" href="index.php" role="button">Voltar</a>
			</center>
		</div class="corpo">
	</body>
</html>