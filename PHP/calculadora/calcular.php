<?php

	require_once 'classes/calculadora.php';

	$calculadora = new Calculadora();

	$numero1 = $_POST['numero1'];
	$numero2 = $_POST['numero2'];
	$operacao = $_POST['operacao'];

	$calculadora -> setNumero1($numero1);
	$calculadora -> setNumero2($numero2);

	echo $calculadora -> getNumero1();

	?>