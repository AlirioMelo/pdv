<?php 
require_once('cabecalho.php');
require_once ('banco/banco_produto.php');
require_once ('banco/banco_categoria.php');


$id=$_GET['id'];
$produto=buscaproduto($conexao,$id);
$vercategoria=listacategoria($conexao);
$usado=$produto['usado']?"checked='checked'":"";
?>
<body background="img/mercado3.jpg">
 <h1>Alterando Produto</h1>	
   <form action="altera_produto.php" method='post'>
    <input type="hidden" name='id' value='<?=$produto['id']?>'></input>
	   <table id="tab7" class="table">
       <?php include('formulario_base.php');?>
     <td>
     <button id="but4" class = 'btn btn-primary' type='submit'>Alterar</button>
     </td>
    </table>
   </form>

<form action="lista_produto.php">
 <td>
  <button id="but3" class="btn btn-primary" type="submit">Voltar</button>
 </td>
</form>  
</body>
<?php require_once('rodape.php');?>