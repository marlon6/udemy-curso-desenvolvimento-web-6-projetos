<?php

class Calculadora{
//atributos
	private $numero1;
	private $numero2;
	private $total;

function  __construct(){
	$numero1 = 0;
	$numero2 = 0;
	$total = 0;

}

		//getters and setters
public function setNumero1($parametro_numero1){
	$this->numero1 = $parametro_numero1;
}
public function setNumero2($parametro_numero2){
	$this->numero2 = $parametro_numero2;
}
public function setOperacao($parametro_operacao){
	$this->operacao = $parametro_operacao;
}

public function getTotal(){
		return $this->total;
	}



public function soma(){
	$this->total = $this->numero1 + $this->numero2;
}

public function subtracao(){
	$this->total = $this->numero1 - $this->numero2;
}
public function multiplicacao(){
	$this->total = $this->numero1 * $this->numero2;
}
public function divisao(){
	$this->total = $this->numero1 / $this->numero2;
}




}

?>