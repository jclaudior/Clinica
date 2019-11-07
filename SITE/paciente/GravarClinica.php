<?php

	$nome = $_POST["nome"];
	$email = $_POST["email"];
	$ddd = $_POST["DDD"];
	$telefone = $_POST["telefone"];
	$dataNascimento = $_POST["dataNascimento"];
	$sexo = $_POST["sexo"];
	$RG = $_POST["RGpaciente"];
	$CPF = $_POST["CPFpaciente"];
	$regiao = $_POST["regiao"];
	
	// verificando os dados recebidos
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
	if (($RG == "") || (strlen($RG) !== 9)){
		die  ("numero de RG invalido");
	}
	if (($CPF == "") || (strlen($CPF) !== 11)){
		die ("numero de CPF invalido");
	}
	if ($regiao == ""){
		die("selecione uma regiao preferencial para seus atendimentos");
	}
	
	$conveniado = 0;
	if (isset ($_POST ["conveniado"])){
		$conveniado = $_POST["conveniado"];
	}
	
	// conectando ao servidor MySql
	include("../conexao.php");
	
	// criando o comando SQL para inserir dados na tabela de pacientes
	$sql = "INSERT INTO pacientes(nome, conveniado, email, dataNascimento, sexo, RGpaciente, CPFpaciente, ddd, numero, regiao) 
	VALUES ('$nome', '$conveniado', '$email', '$dataNascimento', '$sexo', '$RG', '$CPF', '$ddd', '$telefone', '$regiao')";
	
	// enviando os dados para o MySql
	mysqli_query($con, $sql) or die ("Erro na inserção de dados em pacientes".mysqli_error($con)."$sql");
	
	echo "Cadastro finalizado com sucesso<br>";
	echo "<a href='Clinica.php'> Cadastrar novamente </a> <br>";
	echo "<a href='ListagemClinica.php'> Listagem de dados </a>";
?>