<?php 
require_once ('cabecalho.php');
require_once('logica_usuario.php');
require_once ('banco/banco_produto.php');
require_once ('banco/banco_categoria.php');
verificaUsuario();
/*
Linha retirada
<h3>Valor:</h3> <?= number_format($produto['preco'],0,",",".") ?>
*/
?>
	<?php
$id=$_GET['id'];
$produto=buscaproduto($conexao,$id);
$vercategoria=listacategoria($conexao);
$usado=$produto['usado']?"checked='checked'":"";
    ?>
<body background="img/mercado3.jpg">
   <form action="lista_produto.php" method='post'>
    <input type="hidden" name='id' value='<?=$produto['id']?>'></input>
	

<h1>Detalhes do Produto</h1>

<h3>Nome:</h3> <?=$produto['nome']?>

<h3>Valor:</h3> <?php echo number_format($produto['preco'], 2, ',', '.');?>

    <?php if($produto->usado == true) { ?>
     <h3>Este Produto é Usado</h3>
     <?php } else { ?>
    <h3>Este Produto é Novo</h3>    
     <?php } ?>

<h3>Descrição:</h3> <?= $produto['descricao'] ?>
    
   </form>
    
   <form action="lista_produto.php">
    <button class="btn btn-primary" type='submit'> Voltar </button> 
	 </form>
</body>

<?php require_once('rodape.php');?>