<?php

class db{

	//host
	private $host = 'localhost';

	//usuário
	private $usuario = 'root';

	//senha
	private $senha = '';

	//banco de dados
	private $database = 'login';


	public function conecta_mysql(){
	//cria conexão //localização, usuário de acesso, senha e nome do banco.
	$con = mysqli_connect($this->host, $this->usuario, $this->senha,$this->database);

	//ajusta charset // informar conexão e charset a ser setado.
	mysqli_set_charset($con, 'UTF8');

	if(mysqli_connect_errno()){ 
		echo 'Erro ao tentar se conectar com o BD MySQL: '.mysqli_connect_error();
	}

	return $con;

}

}



?>