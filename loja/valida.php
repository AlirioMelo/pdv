<?php
require_once('cadastra_usuario.php');
require_once('logica_usuario.php');
require_once('busca_usuario.php');

$usuario = insereUsuario($conexao, $_POST['usunome'], $_POST['senha']);

if( $usuario != 1 ) {
	$_SESSION["danger"]="<h3 id='p7'>Houve um erro!</h3>";
    header("Location: cadastroUsuario.php");
} else {
	$_SESSION["success"]="<h3 id='p8'>Seu Cadastro foi Efetuado!</h3>";
	logaUsuario($usuario["usunome"]);
    header("Location: index.php");
}
die();