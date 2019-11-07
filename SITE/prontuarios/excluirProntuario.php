<?php
	$id = $_GET["id"];
	include('../conexao.php');
	$sql = "delete from prontuario where ID_prontuario = $id";

	mysqli_query($con, $sql) or die ("Erro ao excluir dados da tabela prontuario". mysqli_error($con));
	echo "Exlusão bem sucedida";
	echo "<a href='listagemProntuario.php'>Voltar</a>";

?>