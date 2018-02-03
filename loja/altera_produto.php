<?php 
require_once('cabecalho.php');
require_once ('banco/banco_produto.php');
require_once ('banco/banco_categoria.php');

?>
<body background="img/mercado3.jpg">
<?php
$categoria = new Categoria;
$produto = new Produto($_POST['cbarra'],$_POST['nome'],$_POST['preco'],$_POST['descricao'],$categoria,$_POST['usado']);
$produto->id=$_POST['id'];
$produto->categoria_id=$_POST['categoria_id'];

 if(alteraproduto($conexao,$produto)){ ?>

 <h1 id="in33">  
 <div>Produto: <?=$produto->nome;?> </div>
   <div>Valor do produto: <?= number_format($produto->getPreco('preco') , 2, ',', '.');?></div>
   <p class="text-success">
     Foi alterado com sucesso! :)
   </p>  
 </h1>
<form action="lista_produto.php">
  <button id="butvolta" class="btn btn-primary" type='submit'> Voltar </button> 
	</form>
<?php } else { ?>
 <h1>
   <p class="text-danger">
     Houve um erro ao Alterar Produto!
         :(
   </p>  
 </h1>
 <form action="formulario.php">
  <button class="btn btn-primary" type='submit'> Refazer </button> 
	</form>
<?php 
} 
mysqli_close($conexao); ?>
</body>
<?php require_once('rodape.php');?>