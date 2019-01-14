<?php

class Pessoa{
	//Atributos

	var $nome;


	//métodos 
	//getter and setters
	function setNome($nome_definido){
		$this->nome = $nome_definido;
	}

	function getNome(){
		return $this->nome;
	}
}

$pessoa = new Pessoa();

$pessoa->setNome('Marlon');
echo $pessoa->getNome();

?>