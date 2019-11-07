<html>
	<head>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title> Listagem Paciente </title>
		<link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.css">
	</head>
<body>
<div class="container-fluid mt-5">
<br>
<?php
	
	//se conectando ao banco
	include("../conexao.php");
		
	// criando o comando SQL para exibir os dados na tela da tabela de pacientes
	$sql = "select * from pacientes";
	
	//enviando o comando pro console do mysql
	$recordSet = mysqli_query($con, $sql) or die ("Erro ao consultar dados da tabela ".mysqli_error($con));
	
	$numberRows = mysqli_num_rows($recordSet);

        $arquivo = substr(strrchr(__FILE__, DIRECTORY_SEPARATOR), 1);
        include('../cabecalho.php');
        
	if ($numberRows > 0){
		echo "<h1 class='display-3'> Listagem Paciente</h1>
				<div align='center'>";
				
		echo "<hr><br>";
		
		echo "<table border = '0' class='table'>
		<tr align='center'>
			<th> Codigo </th>
			<th> Nome </th>
			<th> conveniado </th>
			<th> E-mail </th>
			<th> Data de nascimento </th>
			<th> Sexo </th>
			<th> RG </th>
			<th> CPF </th>
			<th> DDD </th>
			<th> Numero </th>
			<th> Regiao preferencial</th>
			<th colspan='2'> Acoes </th>
		</tr>";
			
		$cont = 0;
		while ($cont < $numberRows){
			$registros = mysqli_fetch_array($recordSet);
			
			$Codigo = $registros["id"];
			$Nome = $registros["nome"];
			$conveniado = $registros["conveniado"];
 			$Email = $registros["email"];
			$DataNascimento = $registros["dataNascimento"];
			$Sexo = $registros["sexo"];
			$RG = $registros["RGpaciente"];
			$CPF = $registros["CPFpaciente"];
			$DDD = $registros["ddd"];
			$Numero = $registros["numero"];
			$regiao = $registros ["regiao"];
			
			echo "
			<tr align='center'>
				<td> $Codigo </td>
				<td> $Nome </td>
				<td> $conveniado </td>
				<td> $Email </td>
				<td> $DataNascimento </td>
				<td> $Sexo </td>
				<td> $RG </td>
				<td> $CPF </td>
				<td> $DDD </td>
				<td> $Numero </td>
				<td> $regiao </td>
				<td> <a href='excluirDados.php?id=$Codigo'> Excluir </a> </td>
				<td> <a href='alterarDados.php?id=$Codigo'> Alterar </a> </td>
			</tr>";
			$cont++;
		}
		echo "</table>";
		echo "</div><br>";
		echo "<hr>";
	}
	else {
		echo "<br>não ha registros na tabela<br>";
	}
	echo "<a href='Clinica.php' class='btn btn-dark'> Cadastrar </a></div>";
	include('../rodape.php');
?>
	<script src="../node_modules/jquery/jquery.js"></script>
    <script src="../node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>
<body>

</html>