<?php
	// Conectando-se ao Servidor MYSQL
	$url = 'localhost';
	$user='root';
	$password='';
	$con = mysqli_connect($url, $user, $password);
	// Abrindo o banco de dados
	$db = 'sistema';
	mysqli_select_db($con, $db) or die('Erro na abertura
	do banco de dados $db:' . mysqli_error($con) );
?>