<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="estilo.css">
		<title>Introdução PHP</title>
	</head> 

	<body>
		
		<?php 
			echo 'Teste de impressão com echo<br>';
			print 'Teste de impressão com print<br>';

			//comenta linha inteira
			# outra forma de comentar uma linha

			/*
				comenta várias
				linhas
			*/


			//variáveis
			/*no php não é exigido informar o tipo de variável. Ele identifica automaticamente.*/

			$numero1 = 1;
			$numero2 = 10.2;
			$estado = true; //quando impressa se verdadeira retorna 1 e se falsa não retorna nada.
			$endereco = 'rua pedra ' .$numero1; // a concatenação é feita pelo ponto final (.).
			// se utilizar áspas duplas não é necessário concatenar. As variáveis poderão ser inclusas diretamente entre as aspas.

			$mult = $numero1 * $numero2;
			$multiplicacao = "$numero1 vezes $numero2 é igual a $mult <br> ";
			// para melhor performace, utilizar aspas simples

			echo $multiplicacao;

			$soma = $numero1 + $numero2;

			echo 'soma da variável numero1 e numero2 =  ';
			echo $soma;

			echo '<br>';

			echo $endereco;


			//array de variáveis
			$emails['a'] = 'tucano@gmail.com'; //não precisão ser só numéricos
			$emails['b'] = 'leao@yahoo.com.br';
			$emails[3] = 'macaco@hotmail.com';
			$emails[4] = 'cabrito@outlook.com';

			echo "<br>array emails na posição 3 = $emails[3] <br>";

			//para fazer a impressão da lista de arrays:

			print_r($emails);
			echo '<br>'; //ou:
			var_dump($emails);

			//arrays com passagem dos índices por parâmetros.
			$lista_funcionarios = array(
				'1' => 'André Tavares',
				'2' => 'Augusto Aurélio',
				'3' => 'Marco Túlio',
				'b1' => 'Alex Silva',
				'b2' => 'Dam Dam',
				'b3' => 'Thiago Fonseca'
			);

			echo '<br> Funcionário: ' .$lista_funcionarios[1] .'<br>' .$lista_funcionarios['b3'];

			echo '<br><br><br>';
			echo 'array multidimensional (matriz):<br><br>';
			//array multidimensional (matriz)

			$tabuleiro[8]['a'] = 'torre preta';
			$tabuleiro[8]['b'] = 'bispo preto';
			$tabuleiro[8]['c'] = 'cavalo preto';
			$tabuleiro[8]['d'] = 'rainha preta';
			$tabuleiro[8]['e'] = 'rei preto';
			$tabuleiro[8]['f'] = 'bispo preto';
			$tabuleiro[8]['g'] = 'cavalo preto';
			$tabuleiro[8]['h'] = 'torre preta';

			$tabuleiro[7]['a'] = 'peão preto';
			$tabuleiro[7]['b'] = 'peão preto';
			$tabuleiro[7]['c'] = 'peão preto';
			$tabuleiro[7]['e'] = 'peão preto';
			$tabuleiro[7]['d'] = 'peão preto';
			$tabuleiro[7]['f'] = 'peão preto';
			$tabuleiro[7]['g'] = 'peão preto';
			$tabuleiro[7]['h'] = 'peão preto';

			$tabuleiro[6]['a'] = '';
			$tabuleiro[6]['b'] = '';
			$tabuleiro[6]['c'] = '';
			$tabuleiro[6]['e'] = '';
			$tabuleiro[6]['d'] = '';
			$tabuleiro[6]['f'] = '';
			$tabuleiro[6]['g'] = '';
			$tabuleiro[6]['h'] = '';

			$tabuleiro[5]['a'] = '';
			$tabuleiro[5]['b'] = '';
			$tabuleiro[5]['c'] = '';
			$tabuleiro[5]['e'] = '';
			$tabuleiro[5]['d'] = '';
			$tabuleiro[5]['f'] = '';
			$tabuleiro[5]['g'] = '';
			$tabuleiro[5]['h'] = '';

			$tabuleiro[4]['a'] = '';
			$tabuleiro[4]['b'] = '';
			$tabuleiro[4]['c'] = '';
			$tabuleiro[4]['e'] = '';
			$tabuleiro[4]['d'] = '';
			$tabuleiro[4]['f'] = '';
			$tabuleiro[4]['g'] = '';
			$tabuleiro[4]['h'] = '';

			$tabuleiro[3]['a'] = '';
			$tabuleiro[3]['b'] = '';
			$tabuleiro[3]['c'] = '';
			$tabuleiro[3]['e'] = '';
			$tabuleiro[3]['d'] = '';
			$tabuleiro[3]['f'] = '';
			$tabuleiro[3]['g'] = '';
			$tabuleiro[3]['h'] = '';

			$tabuleiro[2]['a'] = 'peão branco';
			$tabuleiro[2]['b'] = 'peão branco';
			$tabuleiro[2]['c'] = 'peão branco';
			$tabuleiro[2]['d'] = 'peão branco';
			$tabuleiro[2]['e'] = 'peão branco';
			$tabuleiro[2]['f'] = 'peão branco';
			$tabuleiro[2]['g'] = 'peão branco';
			$tabuleiro[2]['h'] = 'peão branco';

			$tabuleiro[1]['a'] = 'torre branca';
			$tabuleiro[1]['b'] = 'bispo branco';
			$tabuleiro[1]['c'] = 'cavalo branco';
			$tabuleiro[1]['d'] = 'rainha branca';
			$tabuleiro[1]['e'] = 'rei branco';
			$tabuleiro[1]['f'] = 'bispo branco';
			$tabuleiro[1]['g'] = 'cavalo branco';
			$tabuleiro[1]['h'] = 'torre branca';

			print_r($tabuleiro).'<br';

			echo '<br><br>posição 8 d = ' .$tabuleiro[8]['d'];



		?>



		
	</body>
</html>