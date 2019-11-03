<?php

	//se conectando ao banco
	$con = mysqli_connect("localhost", "root", "") or die ("Erro ao conectar ao banco".mysqli_error($con));
		
	// abrindo o banco de dados da clinica
	$db = mysqli_select_db($con, "sistema") or die ("Erro ao acessar o banco".mysqli_error($con));
	
?>