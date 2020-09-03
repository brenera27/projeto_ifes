<?php
session_start(); 
include("conexao.php");
$tabela = $_SESSION['tabela'];

?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

		<link href="../css/themes/dark.min.css" rel="folha de estilo" type="text/css"/> 
		<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
		<title>Inserir</title>
		<link rel="stylesheet" type="text/css" href="estiloInserir.css">
	</head>
	<body>
		<div class="corpo"> 
			<nav aria-label="breadcrumb">
			 	<ol class="breadcrumb">
			  	<li class="breadcrumb-item active" aria-current="page"><img src="img/logoll.png" width="234" height="77" ></li>
			</nav>
			<fieldset>
				<form method="post" action="insert.php">
					<div class="jumbotron">
					 	<p class="lead">Digite a sentença ou clique para ler um arquivo &nbsp &nbsp<a class="btn btn-dark btn-sm" href="leitura.php" role="button">Ler arquivo</a></p>
						<hr class="my-4">
					 	<textarea id="ckeditor"class="ckeditor" name="texto" rows="4" required></textarea>
					 	<br>
						<center>
					 	<input type="submit" name="enviar" id="btnEnviar" class="btn btn-dark btn-lg">
						</center>
					</div>	  
			</fieldset>
			&nbsp<h7> <strong>Inserindo na tabela:</strong>&nbsp<?php echo $tabela; ?> </h7>
			<form method="get" action="escolhaTab.php">			
				<nav class = "botoesDeAcao" aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item active" aria-current="page"><a class="btn btn-link" href="index.php" role="button">Início</a></li>
				    	<li class="breadcrumb-item active" aria-current="page"><a class="btn btn-link" href="phpmyadmin/" role="button">Banco de dados</a></li>
					</ol>
				</nav>	
			</form>
		</div class="corpo">

		<script src="ckeditor/ckeditor.js"></script>
		<script src="jquery-3.4.1.min.js"></script>

	</body>
</html>