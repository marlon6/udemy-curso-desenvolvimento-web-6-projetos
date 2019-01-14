<?php

Class Pessoa{

private $nome;

public function correr(){
	echo $this->nome . " correndo <br>";
}

function __construct($parametro_nome){
	echo 'Contrutor iniciado <br>';
	$this->nome = $parametro_nome;
	$this->nome;
}

function __destruct(){  //utilizado sempre que o objeto for removido da memória.
	echo "Objeto removido <br>";
}

}

$pessoa = new Pessoa('Marlon'); // o método construct é chamado automaticamente ao instanciar a classe.
$pessoa->correr();
?>