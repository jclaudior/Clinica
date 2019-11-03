<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Listagem Funcionarios</title>
		<link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.css">
	</head>
	<body>
	<?php
            $arquivo = substr(strrchr(__FILE__, DIRECTORY_SEPARATOR), 1);
            include('../cabecalho.php');
	?>
	<div class="container-fluid mt-5">
	<br>
	<h1 class="display-3">Listagem Funcionarios</h1>
<?php
	
	ini_set('default_charset','UTF-8');

	include "conexao.php";
	mysqli_set_charset($con, 'utf8');
	$comandoSQL = "SELECT * FROM colaboradores" ;
	mysqli_query($con, $comandoSQL) or die("Erro na selecao de dados" . mysqli_error($con));
	$registros1 = mysqli_query($con, $comandoSQL) or die("Erro na execução do comando de seleção de dados do MySQL:" . mysqli_error($con));
	$linhas = mysqli_num_rows($registros1);
	mysqli_query($con, $comandoSQL) or die("Erro na selecao de dados" . mysqli_error($con));
	$registros2 = mysqli_query($con, $comandoSQL) or die("Erro na execução do comando de seleção de dados do MySQL:" . mysqli_error($con));
	$linhas = mysqli_num_rows($registros2);
	mysqli_query($con, $comandoSQL) or die("Erro na selecao de dados" . mysqli_error($con));
	$registros3 = mysqli_query($con, $comandoSQL) or die("Erro na execução do comando de seleção de dados do MySQL:" . mysqli_error($con));
	$linhas = mysqli_num_rows($registros3);

	if ($linhas<1) {
		die("Cadastro de Times esta vazio");
	}

	echo "<center>";

		echo "<fieldset><legend><h2 class='display-4'>Dados Pessoais</h2></legend>";

		echo "<table border='0' class='table'>";
		echo "<tr>
				<th>Nome</th>
				<th>RG</th>
				<th>CPF</th>
				<th>Especialidade</th>
				<th>Observações</th>
				<th colspan='2'>Ações</th>
			 </tr>
		";

		$contador1=0;
		while ($contador1 < $linhas) {

			$dados1				= mysqli_fetch_array($registros1);
			$idCola				= $dados1['ID_colaboradores'];
			$nomeCola			= $dados1['nomeColaborador'];
			$rgCola				= $dados1['rgColaborador'];
			$cpfCola			= $dados1['cpfColaborador'];
			$especialidadeCola	= $dados1['especialidade'];
			$obsCola			= $dados1['obs'];

			echo "<tr>
						<th>$nomeCola</th>
						<th>$rgCola</th>
						<th>$cpfCola</th>
						<th>$especialidadeCola</th>
						<th>$obsCola</th>
						<td><a href='alterarCola.php?c=$idCola'>Alterar</a></td>
						<td><a href='excluir.php?c=$idCola'>Excluir</a></td>";
			echo "</tr>";
			$contador1++;
		}

		echo "</table>";

		echo "</fieldset><br><br>";
		echo "<fieldset><legend><h2 class='display-4'>Dados De Cadastro</h2></legend>";

		echo "<table border='0' class='table'>";
		echo "<tr>
				<th>Data Admissão:</th>
				<th>Data Demissão:</th>
				<th>Departamento:</th>
				<th>Sala:</th>
				<th>Tipo Contrato:</th>
				<th>Tipo de Remuneração:</th>
				<th>Tipo de Pagamento:</th>
				<th>Remuneração:</th>
				<th>Valor:</th>
				<th>Descontar VT:</th>
				<th>Descontar VR/VA:</th>
				<th colspan='2'>Ações</th>
			</tr>
		";

		$contador2=0;
		while ($contador2 < $linhas) {

			$dados2				= mysqli_fetch_array($registros2);
			$dAdmiCola			= $dados2['dataAdmissao'];
			$dDemiCola			= $dados2['dataDemissao'];
			$depCola			= $dados2['departamento'];
			$salaCola			= $dados2['sala'];
			$tConCola			= $dados2['tipoContrato'];
			$tRemuCola			= $dados2['tipoRemuneracao'];
			$tPgmtCola			= $dados2['tipoPagamento'];
			$remuneCola			= $dados2['remuneColaborador'];
			$valorCola			= $dados2['valorColaborador'];
			$descVTCola			= $dados2['descVT'];
			$descVRCola			= $dados2['descVR'];

			echo "<tr>
						<th>$dAdmiCola</th>
						<th>$dDemiCola</th>
						<th>$depCola</th>
						<th>$salaCola</th>
						<th>$tConCola</th>
						<th>$tRemuCola</th>
						<th>$tPgmtCola</th>
						<th>$remuneCola</th>
						<th>$valorCola</th>
						<th>$descVTCola</th>
						<th>$descVRCola</th>
						<td><a href='alterarCola.php?c=$idCola'>Alterar</a></td>
						<td><a href='excluir.php?c=$idCola'>Excluir</a></td>";
			echo "</tr>";
			$contador2++;
		}

		echo "</table>";

		echo "</fieldset><br><br>";
		echo "<fieldset><legend><h2 class='display-4'>Jornada</h2></legend>";

		echo "<table border='0' class='table'>";
		echo "<tr>
				<th>Entrada</th>
				<th>Saída</th>
				<th>Dias da semana a considerar</th>
				<th colspan='2'>Ações</th>
			</tr>
		";

		$contador3=0;
		while ($contador3 < $linhas) {

			$dados3				= mysqli_fetch_array($registros3);
			$hraEnCola			= $dados3['hraEntrada'];
			$hraSaCola			= $dados3['hraSaida'];
			$jDom				= $dados3['jDom'];
			$jSeg				= $dados3['jSeg'];
			$jTer				= $dados3['jTer'];
			$jQua				= $dados3['jQua'];
			$jQui				= $dados3['jQui'];
			$jSex				= $dados3['jSex'];
			$jSab				= $dados3['jSab'];

			echo "<tr>
						<th>$hraEnCola</th>
						<th>$hraSaCola</th>
						<th>$jDom$jSeg$jTer$jQua$jQui$jSex$jSab</th>
						<td><a href='alterarCola.php?c=$idCola'>Alterar</a></td>
						<td><a href='excluir.php?c=$idCola'>Excluir</a></td>";
			echo "</tr>";
			$contador3++;
		}

		echo "</table>";

		echo "</fieldset><br><br>";

		echo "<br><a class='btn btn-dark' href='formCad1.php'>Cadastro</a>";

	echo "</center>";
	include('../rodape.php');
?>
        <script src="../node_modules/jquery/jquery.js"></script>
        <script src="../node_modules/popper.js/dist/umd/popper.js"></script>
        <script src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>
<body>
</html>