<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Catálogo de produtos</title>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	</head>

	<body>
		<div class="container">
	  		<div class="row">
	  				<h1>Detalhes do produto</h1>
	  		</div>
	  		<div class="col-md-4">
	  			<?php 

	  				$id_produto = $_POST['name_produto']; //tem que ser o mesmo que está presente no method do form. GET ou POST

	  				$detalhes[1] = 'Detalhe das cadeiras';
	  				$detalhes[2] = 'Detalhes do fogão';
	  				$detalhes[3] = 'Detalhes do roteador';
	  				$detalhes[4] = 'Detalhes da TV';

	  				echo $detalhes[$id_produto];
	  			?>

	  		</div>
	  	</div>	
	</body>
</html>