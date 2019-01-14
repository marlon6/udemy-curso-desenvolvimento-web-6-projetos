<?php

class Calculadora{

	//Atributos
	private $numero1;
	private $numero2;
	private $operacao;
	private $total;


	//getters and setters
	public function setNumero1($parametro_numero1){
		if (is_numeric($parametro_numero1)) {
			$this-> numero1 = $parametro_numero1;
		}else{
			echo "Advertência: Campo 'Primeiro número' aceita somente números.<br>";
		}

		
	}
	public function setNumero2($parametro_numero2){
		if (is_numeric($parametro_numero2)) {
			$this-> numero2 = $parametro_numero2;
		}else{
			echo "Advertência: Campo 'Segundo número' aceita somente números.<br>";
		}
		
	}
	public function setOperacao($parametro_operacao){
		$this-> operacao = $parametro_operacao;
	}

	public function getTotal(){
		return $this->total;
	}


	//métodos de calculo
	public function somar(){

		if (is_numeric($this->numero1) && is_numeric($this->numero2)){
			$this->total = $this->numero1 + $this->numero2;

		}
		
	}
	public function subtrair(){
		if (is_numeric($this->numero1) && is_numeric($this->numero2)) {
			$this->total = $this->numero1 - $this->numero2;
		}
		
	}
	public function multiplicar(){
		if (is_numeric($this->numero1) && is_numeric($this->numero2)) {
			$this->total = $this->numero1 * $this->numero2;
		}
	}
	public function dividir(){
		if (is_numeric($this->numero1) && is_numeric($this->numero2)) {
			$this->total = $this->numero1 / $this->numero2;
		}
	}
}

?>