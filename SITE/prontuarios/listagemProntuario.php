<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Listagem Prontuario</title>
        <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.css">
    </head>
    <body>
<?php
$arquivo = substr(strrchr(__FILE__, DIRECTORY_SEPARATOR), 1);
include('../cabecalho.php');
echo "<div class='container-fluid mt-5'>";
echo "<br><h1 class='display-3'>Listagem Prontuarios</h1>";
include('../conexao.php');
$sql = "select * from prontuario";

$rs = mysqli_query($con, $sql) or die ("".mysqli_error($con));
//echo "$rs";
echo "<table border='0' class='table'>
<th>Diagnostico</th>
<th>data</th>
<th>Receita</th>
<th>Evolução</th>
<th>Sumario De Alta</th>
<th>Prescrição</th>
<th colspan='2'>Ações</th>";
$cont = 0;
while ($registros = mysqli_fetch_array($rs)){
	$id = $registros['ID_prontuario'];
	
	echo "<tr><td>" . $registros['diagnostico'] . "</td>";
	echo "<td>" . $registros['data'] . "</td>";
	echo "<td>" . $registros['Receita'] . "</td>";
	echo "<td>" . $registros['Evolucao'] . "</td>";
	echo "<td>" . $registros['sumarioDeAlta'] . "</td>";
	echo "<td>" . $registros['prescricao'] . "</td>";
	echo "<td> <a href='excluirProntuario.php?id=$id'>Excluir</a></td>";
	echo "<td> <a href='alterarProntuario.php?id=$id'>Alterar</a></tr>";
}
echo "</table>";
echo "<a href='cadClinica.php' class='btn btn-dark'>Cadastrar</a>";
include('../rodape.php');


?>
	
	<script src="../node_modules/jquery/jquery.js"></script>
    <script src="../node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>

</body>


</html>