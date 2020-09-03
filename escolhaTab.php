<?php
session_start(); 
$_SESSION['tela'] = @$_GET["enviar"];
?>
<!DOCTYPE html>

<html lang="pt-br">

	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

		<title>Escolha</title>
		<link rel="stylesheet" type="text/css" href="estiloEscolha.css">
	</head>
	<body>

		<div class="corpo"> 
			<nav aria-label="breadcrumb">
			 	<ol class="breadcrumb">
			  	<li class="breadcrumb-item active" aria-current="page"><img src="img/logoll.png" width="305" height="101" ></li>
			</nav>
			<br>
			<fieldset>
				<form method="get" action="trataEscolhaTab.php">
					<div class="jumbotron">
			  			<p class="lead">Selecione a tabela</p>
			  			<hr class="my-4">
			 			<div class="imput">
							<button value="mercadolivre" type="submit" name="enviar" id="btnEnviar" class="btn btn-secondary">Mercado Livre</button>
							<br>
							<button value="sentencas" type="submit" name="enviar" id="btnEnviar" class="btn btn-secondary">Sentenças</button>	 
						</div class = "imput">	
					</div>
				</form>
			</fieldset>
			<br><br>
			<form method="get" action="escolhaTab.php">			
				<nav class = "botoesDeAcao" aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item active" aria-current="page"><a class="btn btn-link" href="index.php" role="button">Início</a></li>
						<li class="breadcrumb-item"> <button value="inserir.php" name="enviar" class="btn btn-link">Cadastrar Sentença</button></li>
					   	<li class="breadcrumb-item"><button value="listagem.php" name="enviar" class="btn btn-link">Listagem</button></li>
					    <li class="breadcrumb-item active" aria-current="page"><a class="btn btn-link" href="phpmyadmin/" role="button">Banco de dados</a></li>
					</ol>
				</nav>	
			</form>		
		</div class="corpo">
	</body>
</html>