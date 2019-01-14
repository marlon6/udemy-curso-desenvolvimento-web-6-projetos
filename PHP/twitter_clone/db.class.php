<?php

/**
 *  
 */
class db {

  //host

	private $host = 'localhost';

  //usuario

	private $usuario = 'root';

  //senha

	private $senha = '';

  //banco de dados 

	private $database = 'twitter_clone';

public function conecta_mysql(){

	//criar a conexao
	$con = mysqli_connect($this->host, $this->usuario, $this->senha,$this->database); //localizacao do db, usuario de acess, senha, banco de dados

	//ajustar o charset de comunicação entre a aplicação e o banco de dados
	mysqli_set_charset($con, 'UTF8'); //conexão com o db, e charset a ser setado.

	//verificar se houve erro de conexão
	if(mysqli_connect_errno()){ 
		echo 'Erro ao tentar se conectar com o BD MySQL: '.mysqli_connect_error();
	}

	return $con;
}

}

?>