<?php
require_once('busca_usuario.php');
require_once('logica_usuario.php');

$usuario = buscaUsuario($conexao, $_POST["usunome"], $_POST["senha"]);

if($usuario == null) {
	$_SESSION["danger"]="<h3 id='p5'>Usuário ou Senha inválida!</h3>";
    header("Location: index.php");
} else {
	$_SESSION["success"]="<h3 id='p6'>Logado com Sucesso!</h3>";
	logaUsuario($usuario["usunome"]);
    header("Location: index.php");
}
die();