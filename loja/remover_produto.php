	<?php 

require_once ('banco/banco_produto.php');
require_once ('banco/banco_categoria.php');

$id=$_POST['id'];
removerproduto($conexao,$id);
$_SESSION["success"]="<h3 id='hremove'>Produto removido com Sucesso!</h3>";
header("location: lista_produto.php");
die();
?>
