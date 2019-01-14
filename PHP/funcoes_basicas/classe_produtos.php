<?php

class Produtos{
//Atributos
	var $codigo;
	var $nome;
	var $preco;

// métodos

	//setters
	function setCodigo($codigo_definido){
		$this->codigo = $codigo_definido;
	}
	function setNome($nome_definido){
		$this->nome = $nome_definido;
	}
	function setPreco($preco_definido){
		$this->preco = $preco_definido;
	}

	//getters
	function getCodigo(){
		return $this->codigo;
	}
	function getNome(){
		return $this->nome;
	}
	function getPreco(){
		return $this->preco;
	}

	$produtos = new Produtos();

	echo $produtos->getNome();

}

?>