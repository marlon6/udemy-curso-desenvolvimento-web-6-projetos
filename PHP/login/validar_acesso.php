<?php

require_once('db.class.php');

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM usuarios WHERE login = '$usuario' AND senha = '$senha'";

echo "$usuario <br> $senha <br>";

$objDb = new db();

$link = $objDb->conecta_mysql();

$resultado_id = mysqli_query($link, $sql); //faz a consulta select

if($resultado_id){
	$dados_usuario = mysqli_fetch_array($resultado_id); //retorna vetor do resultado obtido.
	if(isset($dados_usuario['login'])){
		echo 'Usuário existe';
	}else{
		header('Location: logar.php?erro=1');
	}
}else{
	echo "Erro na execução da consulta. Favor entrar em contato com o admin do site";
}




?>