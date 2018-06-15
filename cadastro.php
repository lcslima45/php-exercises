<?php
	$cpf=isset($_POST['cpf']) ? $_POST['cpf']: '';	
	$total = strlen($cpf);
	if($total != 11 && $cpf!=''){
		echo 'cpf inválido';	
	}
?>
<form method='post' action=''>
	<label>
		CPF:		
		<input type='text' name='cpf'>
	</label>	
	<input type='submit' name='cadastrar'>
</form>

