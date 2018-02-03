<?php 

function carregaClasse($nomeClasse){
   require_once("class/".$nomeClasse.".php");
}
spl_autoload_register("carregaClasse");

require_once ('mostra_alerta.php');
error_reporting(E_ALL ^ E_NOTICE);
?>
<html>
<head>
	<title>Minha Loja</title>
	<meta charset="uft-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/loja.css" media="screen">
</head>

 <div class='navbar navbar-inverse navbar-fixed-top'>
 	<div class='container'>
 	 <div class='navbar-head'>
 		<a class="navbar-brand" href="index.php">Minha Loja</a>
 	 </div>
 	 <div>
 	 	<ul class="nav navbar-nav">
 	 		<li><a href="caixa.php">Caixa</a></li>
 	 		<li><a href="sobre.php">Sobre</a></li>
 	 		<li><a href="contato.php">Fale Conosco</a></li>
 	 		<li id="lisair"><a href="logout.php">Sair</a></li>
 	 	</ul>
 	 </div>
 	</div>
 </div>
	<div class="container">
		<div class="principal">
		   <?php 
		   mostraAlerta("success");
           mostraAlerta("danger");
		   ?>