<?php

class Veiculo{

/* Mdificadores
public - o var, por padrão utilizar o public
private
protected
*/

	// public $placa;
	private $placa;
	private $cor;
	//protected $tipo;  //protected permite que atributos e métodos sejam alterados nas classes filhas.
	protected $tipo='Caminhonete';

    //encapsulando atributo placa.
	public function setPlaca($parametro_placa){
		$this -> placa = $parametro_placa;
	}
	public function getPlaca(){
		return $this -> placa;
	}
}

class Carro extends Veiculo{

	public function exibirTipo(){
		echo $this -> tipo;
	}
}

$veiculo = new Veiculo();
$carro = new Carro();

//$veiculo -> placa = 'JAM3636';
//echo $veiculo -> placa.'<br>';

//$veiculo -> cor = 'Branco';  //atributo private(erro)
//echo $veiculo -> cor;

//$veiculo -> tipo = 'Carro';  //atributo protected(erro)
//echo $veiculo -> tipo;

$veiculo -> setPlaca('AMD333');
echo $veiculo -> getPlaca(),'<br>';

$carro-> exibirTipo();
echo '<br>';

$carro -> placa = 'abc123';
echo $carro -> placa;
?>