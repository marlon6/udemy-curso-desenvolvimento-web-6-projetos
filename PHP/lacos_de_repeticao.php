<?php 
	
	echo 'Laço WHILE<br><br>'; #Laço while
                     # verifica a condição. Se verdadeira, executa.
	$num = 0;
	while($num <= 10){
		
		$num++;

		if (($num % 2)  != 0) {
			echo "número impar($num) <br>";
			continue;
		}

		echo $num .'<br>';

	}

	echo '<br><br>Laço DO WHILE <br><br>'; #Laço do while
				#ele exucuta 'do' primeiro para depois verificar.
	$num = 11;
	do{

		echo $num++ .'<br>';

		
	}while ($num <= 10);

	//for(variavel; condicao; incremento)
	echo '<br>FOR <br><br>';
	
	for ($i = 11; $i >= 0; $i--) { 
		
		echo $i .'<br>';
	}
?>

