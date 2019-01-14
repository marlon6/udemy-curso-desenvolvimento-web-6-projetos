<?php

	echo '<br>';

	$estado = $_POST['estadoComp'];

	echo $estado.'<br>';
	switch($estado){
		case 'MG':
			echo "20% de desconto";
			break;
		case 'ES':
			echo "10% de desconto";
			break;
		default:
			echo "5% de desconto";

	}

	echo '<br>'.(7 % 4);


	





?>