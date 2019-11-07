<?php
	
	$id = $_GET["id"];
	//se conectando ao banco
	include("../conexao.php");
		
	// criando o comando SQL para excluir dados
	$sql = "delete from pacientes where id = $id";
	
	//enviando o comando pro console do mysql
	mysqli_query($con, $sql) or die ("Erro ao excluir dados da tabela pacientes".mysqli_error($con));
	
	echo "Exclusão bem-sucedida  ";
	echo "<a href='ListagemClinica.php'> Voltar </a>"; 

?>