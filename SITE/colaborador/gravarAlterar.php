<?php
	
	if(! isset($_POST['id']))
	die("Forma de chamada da rotina de gravação incorreta!!");
	
	$codigo 		= $_POST['id'];

	$nomeCola 		=$_POST['nomeColaborador'];
	$rgCola 		=$_POST['rgColaborador'];
	$cpfCola 		=$_POST['cpfColaborador'];
	$espCola 		=$_POST['especialidadeColaborador'];
	$obsCola 		=$_POST['obsColaborador'];

	//DadosCad

	$admiCola 		=$_POST['dataAdmiColaborador'];
	$demiCola 		=$_POST['dataDemiColaborador'];
	$depCola 		=$_POST['departamentoColaborador'];
	$salaCola 		=$_POST['salaColaborador'];
	$tConCola 		=$_POST['tipoContrato'];
	$tRemuCola 		=$_POST['tipoRemune'];
	$tPgmtCola 		=$_POST['tipoPgmt'];
	$remuneCola 	=$_POST['remuneColaborador'];
	$valorCola 		=$_POST['valorColaborador'];
	$dVtCola 		=$_POST['descVTColaborador'];
	$dVrCola 		=$_POST['descVRColaborador'];
	$entCola 		=$_POST['tabEntra'];
	$saiCola 		=$_POST['tabSai'];

	//Jornada

	//Padrão
	$dsDomCola = "";
	$dsSegCola = "";
	$dsTerCola = "";
	$dsQuaCola = "";
	$dsQuiCola = "";
	$dsSexCola = "";
	$dsSabCola = "";
	
	// Se veio, atualizo a variável
	if ( isset( $_POST["tabDiaSemDom"] ) )
		$dsDomCola= $_POST["tabDiaSemDom"];
	
	if ( isset( $_POST["tabDiaSemSeg"] ) )
		$dsSegCola= $_POST["tabDiaSemSeg"];
	
	if ( isset( $_POST["tabDiaSemTer"] ) )
		$dsTerCola= $_POST["tabDiaSemTer"];
	
	if ( isset( $_POST["tabDiaSemQua"] ) )
		$dsQuaCola= $_POST["tabDiaSemQua"];
	
	if ( isset( $_POST["tabDiaSemQui"] ) )
		$dsQuiCola= $_POST["tabDiaSemQui"];
	
	if ( isset( $_POST["tabDiaSemSex"] ) )
		$dsSexCola= $_POST["tabDiaSemSex"];
	
	if ( isset( $_POST["tabDiaSemSab"] ) )
		$dsSabCola= $_POST["tabDiaSemSab"]; 

	// Conectando no MYSQL e abrindo o banco
	include 'conexao.php';
	// Criando a variável $sql com o comando de atualização SQL

	$sql = "UPDATE colaboradores SET 
			nomeColaborador='$nomeCola', rgColaborador='$rgCola', cpfColaborador='$cpfCola', especialidade='$espCola', obs='$obsCola', dataAdmissao='$admiCola', dataDemissao='$demiCola', departamento='$depCola', sala='$salaCola', tipoContrato='$tConCola', tipoRemuneracao='$tRemuCola', tipoPagamento='$tPgmtCola', remuneColaborador='$remuneCola', valorColaborador='$valorCola', descVT='$dVtCola', descVR='$dVrCola', hraEntrada='$entCola', hraSaida='$saiCola', jDom='$dsDomCola', jSeg='$dsSegCola', jTer='$dsTerCola', jQua='$dsQuaCola', jQui='$dsQuiCola', jSex='$dsSexCola', jSab='$dsSabCola'";

	// Finalizando o comando (p/ alterar apenas os dados de 1 time)
	$sql .= " WHERE ID_colaboradores= '$codigo'";
	
	// Executando o comando de seleção no MYSQL
	mysqli_query($con, $sql) or die('Erro na atualização dos dados do
	Colaborador $codigo:' . mysqli_error($con) );

	mysqli_query($con, $sql) or die(mysqli_error($con));

	echo "<hr>";
	echo "Sucesso na alteraçao de dados! <br>";
	echo "<hr>";
	echo "<a href='listagem1.php'>Listagem Colaboradores</a>";
?>