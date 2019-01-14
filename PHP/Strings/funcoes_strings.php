<?php

//strtolower (string to lower case)
$texto = "<br>Curso Completo de PHP<br>";
$texto2 = "ucfirst coloca a primeira palavra da frase em maiúscula<br>";
$conte = " 12345<br>";
echo strtolower($texto);

//strtoupper (string to upercase)
echo strtoupper($texto);

//ucfirst (upper case first)

echo ucfirst($texto2);//se o primeiro caracter for um número ou espaço, a ucfirst não faz nada.

//strlen (string length) conta o comprimento. da para validar CPF

echo strlen($conte); //conta também os espaços. //também conta tags(<br>..)
echo "<br><br>";

$cpf = isset($_POST['cpf']) ? $_POST['cpf'] : '';

$total_str_cpf = strlen($cpf);

if ( !empty($total_str_cpf) && $total_str_cpf != 11) {
	echo 'CPF inválido';
}

?>

<form method="post" action="">
	<label>
		CPF:
		<input type="esxt" name="cpf">
		<input type="submit" value="cadastrar">
	</label>
</form>

<?php

//str_replace ('o que?, trocar pelo o que?, variavel a ser pesquisada')
$texto3 = "<br><br> 12.40 <br>";
$cpf1 = "481.401.206-34";

echo str_replace(".", ",", $texto3);

echo '<br>Removendo pontos e hífen de um CPF (481.401.206-34): <br>';
$cpfr = str_replace('.', '', $cpf1);
$cpfr = str_replace('-', '', $cpfr);

echo $cpfr;


//substr (variavel, posição, quantidade de caracteres)

echo '<br><br>';
$text4 = "Entenda porque seu smartphone esquenta tanto<br>";

echo substr($text4, 0, 3);
echo "<br><br>";
$noticia = substr($text4, 0, 29);

echo $noticia.' ...';

?>