<?php
include('conecta.php');

function buscausuario($conexao, $usunome, $senha) {
    $senhaMd5 = md5($senha);
    $usunome = mysqli_real_escape_string($conexao, $usunome);
    $query = "select * from usuario where usunome='{$usunome}' and senha='{$senhaMd5 }'";
    $resultado = mysqli_query($conexao, $query);
    $usuario = mysqli_fetch_assoc($resultado);
    return $usuario;
}