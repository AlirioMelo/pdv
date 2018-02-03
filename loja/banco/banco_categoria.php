<?php
include ('conecta.php');

function listacategoria($conexao){
$vercategoria = array();
$query='select * from categoria';
$resultado = mysqli_query($conexao,$query);
while ($categoria = mysqli_fetch_assoc($resultado)) {
   array_push($vercategoria,$categoria);
 }
return $vercategoria;
}