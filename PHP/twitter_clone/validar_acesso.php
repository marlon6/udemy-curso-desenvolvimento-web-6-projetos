<?php

session_start(); //deve ser antes de qualquer echo, print vardamp e qualquer outra instrução de output. As variáveis de seção passam a ficar disponíveis em qualquer página do site.

require_once('db.class.php');

$usuario = $_POST['usuario'];
$senha = md5($_POST['senha']);



$sql = "SELECT id, usuario, email FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha' ";
//update true/false
//insert ture/false
//select false/resource
//delete true/false

$objDb = new db();
$link = $objDb->conecta_mysql();

$resultado_id = mysqli_query($link, $sql); //fará uma consultado "SELECT" FALSE se hover erro ou resource. Retornando resource será possível explorar a função através do "mysqli_fetch-array"

if($resultado_id){
	$dados_usuario = mysqli_fetch_array($resultado_id); // retorna em uma estrutura de array

	//testa se, o indice usuário da variável dados_usuário, existe.
	if(isset($dados_usuario['usuario'])){

		$_SESSION['id_usuario'] = $dados_usuario['id'];
		$_SESSION['usuario'] = $dados_usuario['usuario'];
		$_SESSION['email'] = $dados_usuario['email'];

		header('Location: home.php');
	}else{
		header('Location: index.php?erro=1');//força redirecionamento da página.(Parametro ?erro=1 será recuperado no inicio da index.php)
	}


}else{
	echo 'Erro na execução da consulta, favor entrar em cntato com o admin do site.';
}









?>