<?php

//Classe mãe / superclasse
class Felino{
	var $mamifero = 'sim';

	function correr(){
		echo 'Correr como felino';
	}
}

//Classe filha / subclasse
class Chita extends Felino{

	//Polimorfismo (sobrescrever o método da superclasse)
	function correr(){
		echo 'Correr como chita 100km/h';
	}
}

$chita = new Chita();

echo $chita -> mamifero.'<br>';
echo $chita -> correr();

?>