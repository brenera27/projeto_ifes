<!DOCTYPE html>
<?php

include("conexao.php");

?>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

		<title>Cesar</title>
		<link rel="stylesheet" type="text/css" href="estiloIndex.css">
	</head>
	<body>
		<div class="corpo"> 
			<nav aria-label="breadcrumb">
			 	<ol class="breadcrumb">
			  	<li class="breadcrumb-item active" aria-current="page"><img src="img/logoll.png" width="234" height="77" ></li>
			</nav>
			<br>
			<div class="jumbotron">
			  <p class="lead">Selecione o validador e a tabela</p>
			  <hr class="my-4">
			  <fieldset>
					<form method="get" action="validacoes.php">
			  				<select id="validador" name="validador" class="btn btn-dark form-control">
								<option>Validador</option>
								<option value=ARISTEU>Aristeu</option>
								<option value=BRENO>Breno</option>
								<option value=MILTON>Milton</option>
							</select>
							<br><br><br>
							<div class="imput">
								<button value="mercadolivre" type="submit" name="enviar" id="btnEnviar" class="btn btn-secondary">Mercado Livre</button>
								<br>
								<button value="sentencas" type="submit" name="enviar" id="btnEnviar" class="btn btn-secondary">Sentenças</button>	 
							</div class = "imput">	
		  				
		  			</form>
				</fieldset>
			</div>
			
			<br>
			<form method="get" action="escolhaTab.php">			
				<nav class = "botoesDeAcao" aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"> <button value="inserir.php" name="enviar" class="btn btn-link">Cadastrar Sentença</button></li>
				    	<li class="breadcrumb-item"><button value="listagem.php" name="enviar" class="btn btn-link">Listagem</button></li>
				    	<li class="breadcrumb-item active" aria-current="page"><a class="btn btn-link" href="phpmyadmin/" role="button">Banco de dados</a></li>
					</ol>
				</nav>	
			</form>
		</div class="corpo">
	</body>
</html>