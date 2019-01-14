<?php

//foreach usado para percorrer arrays. Ele percorre todo o array automaticamente.

$produtos[1] = 'Sofá';
$produtos[2] = 'Mesa';
$produtos[3] = 'Cadeira';
$produtos[4] = 'Fogão';
$produtos[5] = 'Geladeira';
$produtos[6] = 'Miro-ondas';

//var_dump($produtos);
//foreach(array as apelido){} //não necessita d uma condição de parada.
foreach ($produtos as $prod) {
	echo $prod.'<br>';

	if ($prod == 'Cadeira') {
		echo " (40% de desconto na compra de 4 cadeiras.)<br>";
	}
}


?>