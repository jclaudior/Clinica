<?php
 $id 			= $_POST['id'];
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
 	$sql = "UPDATE PRONTUARIO SET diagnostico='$diagnostico', data = '$date', Receita = '$Receita', Evolucao = '$Evolucao', sumarioDeAlta =  '$sumarioDeAlta', prescricao = '$prescricao' where ID_prontuario = $id";
	mysqli_query ($con, $sql)  or die ("".mysqli_error($con));
 	
	echo "Cadastro finalizado";
	echo "<a href='listagemProntuario.php'>Listagem</a>";

?>