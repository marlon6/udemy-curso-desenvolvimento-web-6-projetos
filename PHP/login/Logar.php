<?php

$erro = isset($_GET['erro']) ? $_GET['erro'] : null;


?>


<!DOCTYPE html>
<html>
<head>
	<title>Logar</title>
	<meta charset="UTF-8">

	<!-- jquery - link cdn -->
	<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>


	<script>
		$(document).ready(function(){

			//verifica se campos usuário e senha foram preenchidos.


			$('#btn-submit').click(function(){

				var campo_vazio = false;

				if ($('#usuario').val() == ''){
					alert('Campo usuário está vazio');
					$('#usuario').css({'border-color' : '#A94442'});

					campo_vazio = true;
				}else{
					$('#usuario').css({'border-color': '#CCC'});
				}

				if ($('#senha').val() == ''){
					$('#senha').css({'border-color' : '#A94442'});
					campo_vazio = true;
				}else{
					$('#senha').css({'border-color':'#CCC'});
				}

				if(campo_vazio) return false; //O return false no evento de click do submit impede que o formulário seja enviado. (Impede a action).

			});
		
			
		});
	</script>



</head>
<body>

	<div>
		<form method="post" action="validar_acesso.php">

			<table>
				<tr>
					<td>
						<label for="usuario">Usuário</label>
					</td>
					<td>
						<input type="text" name="usuario" id="usuario">
					</td>
				</tr>
				<tr>
					<td>
						<label for="senha">Senha</label>
					</td>
					<td>	
						<input type="password" name="senha" id="senha">
					</td>
				</tr>
				<br>
			</table>
			<?php

				if($erro == 1){

					echo '<font color="FF0000"> Dados inválidos <br> </font>';
				}

			?>
			<input type="submit" name="Acessar" id="btn-submit">
				
		</form>
	</div>	

</body>
</html>