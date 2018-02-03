<?php require_once('logica_usuario.php');
logout();
$_SESSION["success"]="<h3 id='p4'>Você não esta Logado!</h3>";
header("Location: index.php");
die();