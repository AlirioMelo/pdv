<?php
class Produto{
public $id;
public $cbarra;
public $nome;
private $preco;
public $descricao;
public $categoria;
public $usado;
public $desconto;
public $valor;


function __construct($cbarra='Produto Indefinido',$nome='Produto Indefinido',$preco=99999,$descricao='Contate o Administrador',Categoria $categoria,$usado=true){
	$this->cbarra=$cbarra;
	$this->nome=$nome;
	$this->setPreco($preco);
	$this->descricao=$descricao;
	$this->categoria=$categoria;
	$this->usado=$usado;
}
/*
public function valorDesconto($valor=0.1){
	if($valor <= 0.5 && $valor > 0){
		$this->setPreco($this->preco - $this->preco*$valor);
	}
	return $this->preco;
}
*/
public function setPreco($preco){
    if($preco > 0){
	    $this->preco = $preco;
 }
}

public function getPreco(){
	return $this->preco;
  } 

}
?>   