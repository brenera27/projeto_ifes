<?php
	session_start(); 
	include("conexao.php");

	$validador = @$_GET["validador"];
	$tabela = @$_GET["enviar"];

	//verificando se o usuário selecionou uma opção válida
	if ($validador == "Validador") {
		header('Location: index.php');
	}else{

	// buscando texto na tabela
	$texto = "";
	$id = null;
	$consulta = "SELECT `ID`, `TEXTO` FROM $tabela WHERE $validador IS NULL;";
	$con = $mysqli -> query($consulta) or die ($mysqli->error);
	
	if($dado = $con->fetch_array()){ 

		$texto = $dado["TEXTO"]; 
		$id = $dado["ID"];
		   				
	}
	$_SESSION['tabela'] = $tabela;
	$_SESSION['validador'] = $validador;
	$_SESSION['texto'] = $texto;
	$_SESSION['id'] = $id;	
	}
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<title>Validação</title>
		<link rel="stylesheet" type="text/css" href="estiloValidacoes.css">	
	</head>
	<body>
		<div class="corpo"> 
			<nav aria-label="breadcrumb">
			 	 <ol class="breadcrumb">
			  	 <li class="breadcrumb-item active" aria-current="page"><img src="img/logoll.png" width="234" height="77" ></li>
			</nav>
			<div class = "aviso"></div>
			<?php
				if ($texto == "") {
					echo nl2br ("<center><h3>Você validou todas sentenças!</h3></center>");		
				?>
				<br>
				<center><a class="btn btn-secondary" href="index.php" role="button">Voltar</a></center>
				<?php
					}else{
			  ?>		
			  <div class="jumbotron">
			  <h4>Avalie a sentença:</h4>
			  <br>
			  <p class="blocktext"><?php echo $texto; ?></p>
			  <hr class="my-4">
			  <fieldset>
				<form method="get" action="update.php">
					<center>
						<div class="botoes">
							<button value="positivo" type="submit" name="enviar" id="btnEnviar" class="btn btn-dark btn-lg">Positivo</button>
							<br>
							<button value="sem sentido" type="submit" name="enviar" id="btnEnviar" class="btn btn-secondary btn-lg">Sem sentido</button>
							<br>
							<button value="negativo" type="submit" name="enviar" id="btnEnviar" class="btn btn-dark btn-lg">Negativo</button>
						</div>
					</center>
					<br><br>
					
						<button value="corrigir" type="submit" name="enviar" id="btnEnviar" class="btn btn-warning">Corrigir</button>
					
				</form>
			</fieldset>
			</div>			
			<?php 
				}
			 ?>	
	        &nbsp<h7> <strong>Validador:</strong>&nbsp<?php echo $validador; ?> </h7> |
			<h7> <strong>Tabela:</strong>&nbsp<?php echo $tabela; ?> </h7><br>
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

		<script type="text/javascript">
			var botao = document.querySelector('button.btn btn-warning');
			var aviso = document.createElement('div');
			var textoAviso = document.createTextNude('Avaliação desfeita');
    		aviso.setAttribute('class', 'alert alert-primary');
    		aviso.setAttribute('role', 'alert');
			aviso.appendChild(textoAviso);
			var corpo = document.querySelector('div.aviso');
			botao.onclick = alerta(corpo, aviso);
			

			function alerta(corpo, aviso){
				console.log('foi!!');
    			corpo.appendChild(aviso);
			}
			


		</script>
	</body>
</html>