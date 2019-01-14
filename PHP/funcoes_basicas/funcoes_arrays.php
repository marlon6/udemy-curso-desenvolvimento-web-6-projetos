<?php

//is array

$falso_array = "asdfstring";
$retorno = is_array($falso_array);

$array_v = array('notebook', 'teclado');

$retorno2 = is_array($array_v);



 if ($retorno) {
 	echo "verdadeiro - it's array.<br>";
 }else{
 	echo "false - it isn't array.<br>";
 }

if($retorno2){
	echo 'true - array_v is an array.<br><br>';
}else{
	echo "false - array_v isn't an array.<br>";
}
?>


<?php
 //in_array

$array = array('mac', 'linux', 'windows');

$retorno = in_array('mac', $array);

if ($retorno) {
	echo "true - Há 'mac' no array array.<br><br><br>";
}else

echo "false -não há 'mac' no array array.<br><br>";
?>

<?php

//array_keys
$produtos = array(10=>'Notebook', 11=>'Teclado');
$chaves_array = array_keys($produtos);

//var_dump($chaves_array);
var_export($chaves_array);

echo "<br><br>";
?>

<?php

//short
$frutas = array(0=>'Banana', 1=>'Amora', 2=>'Carambola');

sort($frutas); //a função sort, quando utilizada em uma variável irá retornar valor verdadeiro ou falso se deu certo ou não a ordenação do array. //ordenará ordem numérica e alfabética. Os indices não matem a relação das chaves.

var_export($frutas);

echo "<br><br>";

?>


<?php
//asort - ordena mantendo o indice.

$frutas = array(0=>'Banana',1=> 'Amora',2=>'Carambola');

asort($frutas);

var_export ($frutas);
echo "<br><br>";

?>


<?php
// count
$frutas = array(0=>'Banana',1=> 'Amora',2=>'Carambola');

$itens_array = count($frutas);

echo 'há '.$itens_array.' variáveis no array frutas.<br><br>';


?>

<?php
// array_merge
$array1 = array('mac', 'linux');
$array2 = array('windows');

$novo_array = array_merge($array1, $array2);

var_export($novo_array);

echo "<br><br>";
?>

<?php

//explode - transforma a variavel string em um vetor(array).
$string = "20/10/2020";
$retorno = explode("/", $string);

var_export($retorno);
echo '<br><br>';
?>

<?php

//inplode - junta elementos de um array usando o simbolo determinado. Transforma a array em uma variável comum.
$numeros = array(0=> 10, 1=> 20, 2=> 30);
$nova_string = implode("-", $numeros);

echo $nova_string;


?>