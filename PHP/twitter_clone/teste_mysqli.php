<?php

require_once('db.class.php');


$sql = "SELECT * FROM usuarios";
//update true/false
//insert ture/false
//select false/resource
//delete true/false

$objDb = new db();
$link = $objDb->conecta_mysql();

$resultado_id = mysqli_query($link, $sql); //fará uma consultado "SELECT" FALSE se hover erro ou resource. Retornando resource será possível explorar a função através do "mysqli_fetch-array"

if($resultado_id){
	$dados_usuario = array();

	// O indice MYSQLI_NUM irá trazer somente o indice numérico e MYSQLI_ASSOC, irá trazer somente o índice associativo.
	while($linha = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
		$dados_usuario[] = $linha;
	} 

	foreach ($dados_usuario as $usuario) {
		var_dump($usuario);
		echo '<br><br>';
	}

}else{
	echo 'Erro na execução da consulta, favor entrar em cntato com o admin do site.';
}

?>