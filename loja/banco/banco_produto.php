<?php
require_once('conecta.php');

function listaprodutos($conexao){
$verprodutos = array();
$query="select p.*, c.nome as categoria_nome from produto as p join categoria as c on c.id=p.categoria_id";
$resultado = mysqli_query($conexao,$query);
while ($produto_atual = mysqli_fetch_assoc($resultado)) {
    $categoria = new Categoria();
	$produto = new Produto($produto_atual['cbarra'],$produto_atual['nome'],$produto_atual['preco'],$produto_atual['descricao'],$categoria,$produto_atual['usado']);
	$categoria->nome = $produto_atual['categoria_nome'];
    $produto->id = $produto_atual['id'];

   array_push($verprodutos,$produto);
 }
return $verprodutos;
} 

function insereproduto($conexao, Produto $produto){
 $query = "insert into produto (categoria_id,cbarra,nome,preco,descricao,sort(array, cmp_function)usado) values (NULL,{$produto->categoria->id},'{$produto->cbarra}','{$produto->nome}', '{$produto->descricao}', {$produto->getPreco()},{$produto->usado})";
 return mysqli_query($conexao,$query); 
}

function alteraproduto($conexao, Produto $produto){
 $query = "update produto set categoria_id={$produto->categoria_id},nome='{$produto->nome}',descricao='{$produto->descricao}',preco={$produto->getPreco()},usado={$produto->usado} where id='{$produto->id}'";
 return mysqli_query($conexao,$query); 
}

function removerproduto($conexao,$id) {
    $query = "delete from produto where id = '{$id}'";
    return mysqli_query($conexao, $query);
}

function buscaproduto($conexao, $id) {
    $query = "select * from produto where id = '{$id}'";
    $resultado = mysqli_query($conexao, $query);
    return mysqli_fetch_assoc($resultado);
}

