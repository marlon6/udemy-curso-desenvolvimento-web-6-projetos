<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Claculado em PHP</title>
	<meta charset="UTF-8">
</head>
<body>
	<form method="post" action="">
		<label>
			Primeiro numero:
			<input type="text" name="numero1" required="required">
		</label>
		<label>
			Segundo número:
			<input type="text" name="numero2" required="required">
		</label>
		<br>
		Operação:<br>
		<label>
			<input type="radio" name="operacao" value="somar" required="required">
			Somar
			<input type="radio" name="operacao" value="subtrair">
			Subtrair
			<input type="radio" name="operacao" value="multiplicar">
			Multiplicar
			<input type="radio" name="operacao" value="dividir">
			Dividir
		</label>
		<br>
		<input type="submit" value="calcular">
	</form>

<br>
Resultado:
<br>

<?php
	require_once 'classes/calculadora.php';

	$calculadora = new Calculadora();

	//validação iniciação com campos vazios
	$numero1 = 0;
	$numero2 = 0;
	$operacao = null;

	if(isset($_POST['numero1'])){
		$numero1 = $_POST['numero1'];
	}

	if(isset($_POST['numero2'])){
		$numero2 = $_POST['numero2'];
	}

	if(isset($_POST['operacao'])){
		$operacao = $_POST['operacao'];
	}



	$calculadora -> setNumero1($numero1);
	$calculadora -> setNumero2($numero2);

	switch($operacao){
		case 'somar':
			$calculadora->somar();
			break;

		case 'subtrair':
			$calculadora->subtrair();
			break;

		case 'multiplicar':
			$calculadora->multiplicacao();
			break;

		case 'dividir':
			$calculadora->dividir();	
	}

	echo $calculadora -> getTotal();

	?>
	<br><br>

	<!-- apaga resultado anterior.-->
	<form method="post" action="">
		<input type="submit" name="ce" value="CE">
	</form>
	
</body>
</html>