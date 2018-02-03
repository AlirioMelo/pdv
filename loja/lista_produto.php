<?php 
require_once ('cabecalho.php');
require_once('logica_usuario.php');
require_once ('banco/banco_produto.php');
require_once ('banco/banco_categoria.php');
/*
linhas trocadas
<td align="center"><h3>Desconto</h3></td>
<td> <?= number_format($produto->valorDesconto(),0,",",".") ?> </td>
<td> <?= number_format($produto->getPreco(),0,",",".") ?></td>
*/ 
verificaUsuario();
?>
<body background="img/mercado3.jpg">
<h1 id="hlista">Lista de Produtos</h1>
<div id="divtab1">
<table id="tlista" class="table table-striped table-bordered">
<header>
  <tr>
    <td align="center"><h3>Produtos</h3></td>
    <td align="center"><h3>Valor</h3></td>
    <td align="center"><h3>Descrição</h3></td>
    <td align="center"><h3>Categoria</h3></td>
    <td align="center"><h3>Tipo</h3></td> 
    <td align="center"><h3>Opções</h3></td> 
  </tr>
</header>
	<?php
	$verprodutos = listaprodutos ($conexao);
	foreach ($verprodutos as $produto){
    ?>
   <tr align="center"> 
    <td> <?= $produto->nome ?> </td>
   	<td> <?= number_format($produto->getPreco(), 2, ',', '.');?></td>
    <td> <?= substr($produto->descricao,0,15),'...' ?></td>
    <td> <?= $produto->categoria->nome ?> </td>

    <?php if($produto->usado == true) { ?>
     <td>Usado</td>
     <?php } else { ?>
    <td>Novo</td>    
     <?php } ?>

    <td align="center">
  <table>
    <form action="detalhe.php">
       <input type="hidden" name="id" value="<?=$produto->id;?>"></input>
       <button class="btn btn-info">
        <span class="glyphicon glyphicon-search"></span>
       </button>
    </form>
      &nbsp;  
    <form action="alterar_produto_formulario.php">
       <input type="hidden" name="id" value="<?=$produto->id;?>"></input>
       <button class="btn btn-warning">
        <span class="glyphicon glyphicon-wrench"></span>
       </button>
    </form>
      &nbsp;
    <form action="remover_produto.php" method="post">
       <input type="hidden" name="id" value="<?=$produto->id;?>"></input>
   	   <button class="btn btn-danger">
        <span class="glyphicon glyphicon-trash"></span>
       </button>
    </form>   
   </table> 
   	</td>
   </tr> 
    <?php   
	 } //final do for
	?>
</table>
</div>
  <form action="formulario.php">
    <button id="butlista" class="btn btn-primary" type='submit'> Cadastrar Produto </button> 
	</form>
</body>
<?php require_once ('rodape.php');?>