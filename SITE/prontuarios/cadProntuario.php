<?php

 $diagnostico	= $_POST['diagnostico'];
 $date			= $_POST['date'];
 $Receita		= $_POST['Receita'];
 $Evolucao		= $_POST['Evolucao'];
 $sumarioDeAlta = $_POST['sumarioDeAlta'];
 $prescricao	= $_POST['prescricao'];


if($diagnostico == " "){
 		die("Preencha o campo de diagnostico");
 	}
	
 	include('../conexao.php');
 	$sql = "INSERT INTO PRONTUARIO(diagnostico, data, Receita, Evolucao, sumarioDeAlta, prescricao) 
	VALUES ('$diagnostico','$date','$Receita','$Evolucao','$sumarioDeAlta', '$prescricao')";
	mysqli_query ($con, $sql)  or die ("".mysqli_error($con));
 	
	echo "Cadastro finalizado";
	echo "<a href='cadClinica.php'>Cadastrar</a>"


?>