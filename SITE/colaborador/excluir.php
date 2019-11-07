<?php
	
	ini_set('default_charset','UTF-8');

	echo "<h2>Exclusão de Colaboradores</h2>";
	$id = $_GET['c'];
	echo "Eliminado Colaborador código $id <br>";

	include "../conexao.php";
	
	$sql = "DELETE FROM colaboradores WHERE ID_colaboradores=$id";
	mysqli_query($con, $sql) or die("Erro na exclusão do time $id: ");

	echo "Registro eliminado com sucesso <br>";
	echo "<br><a href='listagem1.php'>Voltar</a>";

?>