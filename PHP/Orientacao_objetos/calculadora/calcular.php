<?php

require_once'classes/calculadora.php';

$calculadora = new Calculadora();


	$numero1 = $_POST['numero1'];
	$numero2 = $_POST['numero2'];
	$operacao = $_POST['operacao'];




$calculadora -> setNumero1($numero1);
$calculadora -> setNumero2($numero2);
$calculadora -> setOperacao($operacao);


switch($operacao){
	case 'soma':
		$calculadora->soma();
		break;
	case 'subtracao':
		$calculadora->subtracao();
		break;
	case 'multiplicacao':
		$calculadora->multiplicacao();
		break;
	case 'divisao':
		$calculadora->divisao();
}


echo $calculadora -> getTotal();



?>