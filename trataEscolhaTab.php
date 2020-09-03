<?php 
session_start(); 

$_SESSION['tabela'] = @$_GET["enviar"];
header('Location: '.$_SESSION['tela']);

 ?>