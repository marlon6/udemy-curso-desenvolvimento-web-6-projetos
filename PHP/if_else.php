<?php 

echo "if_else de identico(===)<br>";
if (2 === '2') {

	echo 'Sim, expressão é verdadeira<br><br>';
}
else{
	echo "Não, expressão é falsa.<br><br>";
}

echo "if else de XOR:<br>";

if (2 === '2' XOR '3' === 3) {

	echo 'Sim, expressão é verdadeira(retorna falso se ambas expressões forem falsas ou se ambas fore verdadeiras)<br><br>';
}
else{
	echo "Não, expressão é falsa(XOR retorna verdadeira se somente uma expressão for verdadeira).<br><br>";
}

echo "if_else de negação(!):<br>";
//usando negação para inverter resultado:

if (!(3 <= 4)) {
	echo 'entrou no if.';
}
else{
	echo "entrou no else";
}



//para operadores lógicos e de comparação há sinais semelhantes: (AND &&) (OR ||) (!= <>)
?>