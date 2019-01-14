<?php

//função sem retorno
function exibir_boas_vindas($nome='indefinido'){
	echo "curso ao curso php " .$nome .'!<br>';
}

//função com retorno
function calcular_soma($numero1,$numero2){
	return $numero1+$numero2;
}


//chamar função sem retorno
exibir_boas_vindas('Ana');

echo calcular_soma(2,2);


?>

