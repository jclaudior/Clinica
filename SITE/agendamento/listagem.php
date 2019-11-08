<html lang="pt-br">
	<head>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Listagem Agendamento</title>
		<link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.css">
	</head>
	<body>
	<div class="container-fluid mt-5">
	<?php
        $arquivo = substr(strrchr(__FILE__, DIRECTORY_SEPARATOR), 1);
        include('../cabecalho.php');
		echo "<br><h1 class='display-3'>Listagem Agendamento</h1>";
include('../conexao.php');
$sql="select * from agendamento";
$registro = mysqli_query ($con, $sql) or die("erro ao executar comando sql". mysqli_error ($con));
$linhas = mysqli_num_rows($registro);

if ($linhas <1){ 
echo "agendamento está vazia";

}else{


echo "registros encontrados $linhas";
$cont = 0;

echo "
<table border='0' class='table'> 
	<tr> 
		<th>protocolo agendamento</th>
		<th>id_paciente</th>
		<th>id_colaboradores</th>
		<th>diaconsulta</th>
		<th>hora</th>
		<th>atendido</th>
		<th>obs</th>
		<th colspan='2'>ação</th>
	</tr>
";

	while($cont <$linhas){
		$dados=mysqli_fetch_array($registro);
		$protocolo=$dados['ProtocoloAgendamento'];
	    $paciente=$dados ['id_paciente'];
		$colaboradores=$dados['id_colaboradores'];
		$diaconsulta=$dados['DiaConsulta'];
	    $hora=$dados['Hora'];
		$atendido=$dados['Atendido'];
		$obs=$dados['obs'];
		echo"
		<tr>
			<td>$protocolo</td>
			<td>$paciente</td>
			<td>$colaboradores</td>
			<td>$diaconsulta</td>
			<td>$hora</td>
			<td>$atendido</td>
			<td>$obs</td>
			<td><a href='excluir.php?id=$protocolo'>excluir</a></td>
			<td><a href='alteraagendamento.php?id=$protocolo'>alterar</a></td>
		</tr>
		";
		$cont++;
		
	}
	echo "</table>";
	echo "listagem finalizada<br>";
}
	echo"<br><a class='btn btn-dark' href='agendamento.php'>Cadastrar</a></div>";
		







	include('../rodape.php')?>
    <script src="../node_modules/jquery/jquery.js"></script>
    <script src="../node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>
	</body>            
</html>