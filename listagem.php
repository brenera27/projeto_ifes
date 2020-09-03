<?php
	session_start(); 
	include("conexao.php");

	$tabela = $_SESSION['tabela'];
	$consulta = "SELECT * FROM $tabela;";
	$con = $mysqli -> query($consulta) or die ($mysqli->error);
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

		<title>Listagem</title>
		<link rel="stylesheet" type="text/css" href="estiloListagem.css">
	</head>
	<body>
		<div class="corpo"> 
			<nav aria-label="breadcrumb">
			 	 <ol class="breadcrumb">
			  	 <li class="breadcrumb-item active" aria-current="page"><img src="img/logoll.png" width="234" height="77" ></li>
			</nav>			
			<br>
			<div class="conteudo">
				<center><a class="btn btn-secondary" href="index.php" role="button">Voltar</a>
				<br><br>
				<h5> <strong>Tabela:</strong>&nbsp<?php echo $tabela; ?> </h5>
				</center>
				<br>
			<table class="table table-striped" >
			  <thead>
			    <tr>
			      <th scope="col">ID</th>
			      <th scope="col">SENTENÇA</th>
			      <th scope="col">ARISTEU</th>
			      <th scope="col">BRENO</th>
			      <th scope="col">MILTON</th>
			      <th scope="col">IA</th>
			    </tr>
			  </thead>
			
			  <tbody>
			  	 <?php while($dado = $con->fetch_array()){ ?>
			    <tr>
			      <td><?php echo $dado["ID"]; ?></td>
			      <td><?php echo $dado["TEXTO"]; ?></td>
			      <td><?php echo $dado["ARISTEU"]; ?></td>
			      <td><?php echo $dado["BRENO"]; ?></td>
			      <td><?php echo $dado["MILTON"]; ?></td>
			      <td><?php echo $dado["IA"]; ?></td>       
			    </tr>
			     <?php
			  	}
			  ?>
			  </tbody>
			</table>
		</div>
		</div class="corpo">
	</body>
</html>