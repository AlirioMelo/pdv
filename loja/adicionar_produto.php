<?php 
require_once ('banco/banco_produto.php');
require_once ('cabecalho.php');
require_once ('logica_usuario.php');

verificaUsuario();
?>

<?php
$categoria = new Categoria;
$categoria->id=$_POST['categoria_id'];
$produto = new Produto($_POST['cbarra'],$_POST['nome'],$_POST['preco'],$_POST['descricao'],$categoria,$_POST['usado']);  

$produtoDao = new ProdutoDAO($conexao);

 if($produtoDao->insereproduto($produto)){ ?>
<body background="img/images2.jpg">
 <h1 id="posicao">  
 <div>Produto: <?=$produto->nome;?> </div>
   <div>Valor do produto: R$= <?= number_format($produto->getPreco('preco'), 2, ',', '.');?></div>
   <p class="text-success">
     Foi adicionado com sucesso! :)
   </p>  
 </h1>
<form action="formulario.php">
  <button id="in16" class="btn btn-primary" type='submit'> Voltar </button> 
  </form>
  <form id="in15" action="caixa.php">
  <button class="btn btn-primary" type='submit'> Ir Caixa </button> 
	</form>
 </body> 
<?php } else { ?>
<body background="img/images2.jpg">
 <h1>
   <p class="text-danger">
     Houve um erro no Cadastro!
   </p>  
 </h1>

<img src="img\opps.png" alt="Imagem responsiva" width="300px" height="300px">

 <form action="formulario.php">
  <button id="buttonrefazer" class="btn btn-primary" type='submit'> Refazer </button> 
	</form>
</body>  
<?php 
} 
mysqli_close($conexao); ?>

<?php require_once('rodape.php');?>