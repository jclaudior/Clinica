<?php
	include ("../conexao.php");
	
	if(! isset($_POST['id'])) die ("Chamada da rotina incorreta");
	
	$codigo = $_POST["id"];
	$nome = $_POST["nome"];
	$dataNascimento = $_POST ["dataNascimento"];
	$rg = $_POST ["RGpaciente"];
	$cpf = $_POST["CPFpaciente"];
	$sexo = $_POST["sexo"];
	$email = $_POST["email"];
	$ddd = $_POST["DDD"];
	$telefone = $_POST["telefone"];
	$regiao = $_POST["regiao"];
	
	if ($nome == ""){
		die ("Preencha o campo nome");
	}
	if (strlen($nome) > 80){
		die ("o nome deve conter no maximo 80 caracteres");
	}
	if ($email == ""){
		die ("preencha o campo E-mail");
	}
	if (strlen($email) > 100){
		die ("o campo email deve conter no maximo 100 caracteres");
	}
	if ((strlen($ddd) < 2) || (strlen($ddd) > 2)){
		die ("numero de DDD invalido");
	}
	if ((strlen($telefone) < 8) || (strlen($telefone) > 9)){
		die ("Numero de telefone/celular invalido");
	}
	if (empty ($dataNascimento)){
		die ("Informe sua data de nascimento");
	}
	if (empty ($sexo)){
		die ("Informe seu sexo");
	}
	if (($rg == "") || (strlen($rg) !== 9)){
		die  ("numero de RG invalido");
	}
	if (($cpf == "") || (strlen($cpf) !== 11)){
		die ("numero de CPF invalido");
	}
	if ($regiao == "S"){
		die("selecione uma regiao preferencial para seus atendimentos");
	}
	$conveniado = 0;
	if (isset ($_POST ["conveniado"])){
		$conveniado = $_POST["conveniado"];
	}
	
		
	//mostrar os dados
	echo "Nome: $nome <br>";
	echo "Data de nascimento: $dataNascimento <br>";
	echo "RG: $rg<br>";
	echo "CPF: $cpf<br>";
	echo "Conveniado: $conveniado<br>";
	echo "Sexo: $sexo<br>";
	echo "E-mail: $email<br>";
	echo "DDD: $ddd <br>" ;
	echo "Telefone: $telefone<br>" ;
	echo "Regiao de preferencia: $regiao <br><hr>";
	
	$sql = "UPDATE pacientes SET 	
			nome = '$nome',
			conveniado = '$conveniado',
			email = '$email',
			dataNascimento = '$dataNascimento',
			sexo = '$sexo',
			RGpaciente = '$rg',
			CPFpaciente = '$cpf',
			ddd = '$ddd',
			numero = '$telefone',
			regiao = '$regiao'
			where id = $codigo";
	
	mysqli_query ($con, $sql) or die ("Erro ao alterar dados em pacientes" .mysqli_error($con). "$sql");
	echo "<br>Alteração concluida<br>";
	
	echo "<a href='listagemClinica.php'>Listagem</a>";
?>