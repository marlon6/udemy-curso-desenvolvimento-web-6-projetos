<?php

//isset()
$valor1 = "marlon"; // mesmo só com as aspas(''), se usado isset, ela retornar true.
$valor2 = 'null';
$valor3;



if(isset($valor1)){
	echo 'Variavel valor iniciada <br>';
}
else{
	echo 'Variavel valor1 nao iniciada.<br>';
}

if (isset($valor2) || isset($valor3)) {
	echo 'Variavel valor3 ou valor2 iniciada <br>';

} else {
	echo 'Variavel valor3 e valor2 não iniciada.';
}


//empty retornar true quando variavel está vazia
//('',0, '0', false, null,array()). nos demais casos retorna false.

$valor4 = ''; 

if (empty($valor4)) {
	echo "Variavel vazia";
} else {
	echo 'variável preenchida.';
}

// is_numeric()
$valor5 = '0.2'; //com aspas ou sem, irá considerar numérico.

if (is_numeric($valor5)) {
	echo '<br> it is numeric.';
} else {
	echo '<br> It is not numeric.';
}


?>