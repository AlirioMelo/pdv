<?php
class ProdutoDAO{

    private $conexao;
    function __construct($conexao){
        $this->conexao = $conexao;
    }

function listaprodutos(){
$verprodutos = array();
$query="select p.*, c.nome as categoria_nome from produto as p join categoria as c on c.id=p.categoria_id";
$resultado = mysqli_query($this->conexao,$query);
while ($produto_atual = mysqli_fetch_assoc($resultado)) {
    $categoria = new Categoria();
    $produto = new Produto($produto_atual['cbarra'],$produto_atual['nome'],$produto_atual['preco'],$produto_atual['descricao'],$categoria,$produto_atual['usado']);
    $categoria->nome = $produto_atual['categoria_nome'];
    $produto->id = $produto_atual['id'];

   array_push($verprodutos,$produto);
 }
return $verprodutos;
} 

function insereproduto(Produto $produto){
 $query = "insert into produto (cbarra,nome,preco,descricao,categoria_id,usado) values ('{$produto->cbarra}','{$produto->nome}',{$produto->getPreco()},'{$produto->descricao}',{$produto->categoria->id},{$produto->usado})";
 return mysqli_query($this->conexao,$query); 
}

function alteraproduto(Produto $produto){
 $query = "update produto set nome='{$produto->nome}',preco={$produto->getPreco()},descricao='{$produto->descricao}',categoria_id={$produto->categoria_id},usado={$produto->usado} where id='{$produto->id}'";
 return mysqli_query($this->conexao,$query); 
}

function removerproduto($id) {
    $query = "delete from produto where id = '{$id}'";
    return mysqli_query($this->conexao, $query);
}

function buscaproduto($id) {
    $query = "select * from produto where id = '{$id}'";
    $resultado = mysqli_query($this->conexao, $query);
    return mysqli_fetch_assoc($resultado);
}
function buscaproduto2($busca) {
    $query = "select * from produto where cbarra = '{$busca}'";
    $resultado = mysqli_query($this->conexao, $query);
    return mysqli_fetch_assoc($resultado);
}

}