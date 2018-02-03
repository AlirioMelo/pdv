<?php
include('conecta.php');

function insereUsuario($conexao,$usunome,$senha){
	if ( $usunome != null AND $senha != null ){
		$senhaMd5 = md5($senha);
		$query = "insert into usuario (usunome,senha) values ('{$usunome}','{$senhaMd5}')";
	    $resultado = mysqli_query($conexao, $query);
	    return $resultado;
	} else {
		$usuario = null;
	}
	
}

