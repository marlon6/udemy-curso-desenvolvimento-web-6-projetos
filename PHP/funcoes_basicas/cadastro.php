<?php


if(isset($_POST['nome']) && empty($_POST['nome'])){
	echo 'Campo "Nome completo" obrigatório. <br>';
}
if (isset($_POST['cpf']) && empty($_POST['cpf'])) {
	echo'Campo "CPF" obrigatório.<br>';
} 

if (isset($_POST['cpf']) && !is_numeric($_POST['cpf'])) {
	
	if (empty($_POST['cpf'])) {
		# code...
	}else{
		echo "Apenas numeros no CPF";
	}
	
}
// é possível também tornar o campo obrigatório pelo preenchimento na input do hotml5 "required="required""


?>

<form method="POST" action="">
	<label>
		Nome completo*:
		<input type="text" name="nome">
	</label>
	<label>
		CPF*:
		<input type="text" name="cpf">
	</label>

	<input type="submit" value="cadastrar" >
</form>