<?php

	ini_set('default_charset','UTF-8');
	
	//DadosPess

	$nomeCola 		=$_POST["nomeColaborador"];
	$rgCola 		=$_POST["rgColaborador"];
	$cpfCola 		=$_POST["cpfColaborador"];
	$espCola 		=$_POST["especialidadeColaborador"];
	$obsCola 		=$_POST["obsColaborador"];

	//DadosCad

	$admiCola 		=$_POST["dataAdmiColaborador"];
	$demiCola 		=$_POST["dataDemiColaborador"];
	$depCola 		=$_POST["departamentoColaborador"];
	$salaCola 		=$_POST["salaColaborador"];
	$tConCola 		=$_POST["tipoContrato"];
	$tRemuCola 		=$_POST["tipoRemune"];
	$tPgmtCola 		=$_POST["tipoPgmt"];
	$remuneCola 	=$_POST["remuneColaborador"];
	$valorCola 		=$_POST["valorColaborador"];
	$dVtCola 		=$_POST["descVTColaborador"];
	$dVrCola 		=$_POST["descVRColaborador"];
	$entCola 		=$_POST["tabEntra"];
	$saiCola 		=$_POST["tabSai"];

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
	if ($dsDomCola==1) {
		$dsDomCola = "Dom";
	}
	if ( isset( $_POST["tabDiaSemSeg"] ) )
		$dsSegCola= $_POST["tabDiaSemSeg"];
	if ($dsSegCola==1) {
		$dsSegCola = "Seg";
	}
	if ( isset( $_POST["tabDiaSemTer"] ) )
		$dsTerCola= $_POST["tabDiaSemTer"];
	if ($dsTerCola==1) {
		$dsTerCola = "Ter";
	}
	if ( isset( $_POST["tabDiaSemQua"] ) )
		$dsQuaCola= $_POST["tabDiaSemQua"];
	if ($dsQuaCola==1) {
		$dsQuaCola = "Qua";
	}
	if ( isset( $_POST["tabDiaSemQui"] ) )
		$dsQuiCola= $_POST["tabDiaSemQui"];
	if ($dsQuiCola==1) {
		$dsQuiCola = "Qui";
	}
	if ( isset( $_POST["tabDiaSemSex"] ) )
		$dsSexCola= $_POST["tabDiaSemSex"];
	if ($dsSexCola==1) {
		$dsSexCola = "Sex";
	}
	if ( isset( $_POST["tabDiaSemSab"] ) )
		$dsSabCola= $_POST["tabDiaSemSab"];
	if ($dsSabCola==1) {
		$dsSabCola = "Sab";
	}

	//Conexao

	include "conexao.php";
	$sql = "insert into colaboradores (
			nomeColaborador, rgColaborador, cpfColaborador, especialidade , obs, dataAdmissao, dataDemissao, departamento, sala, tipoContrato, tipoRemuneracao, tipoPagamento, remuneColaborador, valorColaborador, descVT, descVR, hraEntrada, hraSaida, jDom, jSeg, jTer, jQua, jQui, jSex, jSab) 
			VALUES('$nomeCola', '$rgCola', '$cpfCola', '$espCola', '$obsCola', '$admiCola', '$demiCola', '$depCola', '$salaCola', '$tConCola', '$tRemuCola', '$tPgmtCola', '$remuneCola', '$valorCola', '$dVtCola', '$dVrCola', '$entCola', '$saiCola', '$dsDomCola', '$dsSegCola', '$dsTerCola', '$dsQuaCola', '$dsQuiCola', '$dsSexCola', '$dsSabCola')";
	//echo "Comando SQL: <hr> $sql <hr>";
	mysqli_query($con, $sql) or die ("Erro na inserção de registro no banco: " . mysqli_error($con));

	echo '<script type="text/javascript">location.replace("listagem1.php");</script>';

?>