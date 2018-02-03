<?php
session_start();
function usuarioEstaLogado() {
    return isset($_SESSION["usuario_logado"]);
}

function verificaUsuario() {
  if(!usuarioEstaLogado()) {
  	$_SESSION["danger"]="<h3 id='husuario'>Você não tem acesso a esta Funcionalidade!<br/> Faça seu Login!</h3>";
     header("Location: index.php");
     die();
  }
}

function usuarioLogado() {
    return $_SESSION["usuario_logado"];
}

function logaUsuario($usunome) {
  $_SESSION["usuario_logado"]=$usunome;
}
function logout(){
	session_destroy();
	session_start();
}