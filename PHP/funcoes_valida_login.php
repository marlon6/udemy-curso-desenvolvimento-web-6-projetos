<?php

function valida_login($login, $senha){
	//validar direto em um banco de dados;
	$login_bd = 'Marlon';
	$senha_bd = '1234';

	if ($login == $login_bd && $senha==$senha_bd) {
		return true;
	}

	return false;
}

?>