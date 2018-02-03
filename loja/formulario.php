<?php 
require_once('cabecalho.php');
require_once('logica_usuario.php');
require_once ('banco/banco_produto.php');
require_once ('banco/banco_categoria.php');

verificaUsuario();
$produto=array("cbarra"=>"","nome"=>"","preco"=>"","descricao"=>"","categoria_id"=>"");
$usado="";
$vercategoria=listacategoria($conexao);
?>
<body background="img/mercado2.jpg" onLoad="document.getElementById('in23').focus() ">
 <h1 id="hcadastro">Cadastro de Produtos</h1>	
  <form action="adicionar_produto.php" method='post'>
	  <table id="tab6" class="table">
	  
      <?php include('formulario_base.php');?>    
       
   <td>
    <button id="but1" class = 'btn btn-primary' type='submit'>Cadastrar</button>
   </td>
    </table>
  </form>

<form action="lista_produto.php">
 <td>
  <button id="but2" class="btn btn-primary" type="submit">Lista de Produtos</button>
 </td>
</form>  
</body>
<?php require_once('rodape.php');?>	