<?php
header("Content-type: text/html; charset=utf-8");
if (empty ($_POST['id']))
	die ("chamada para operacao invalida");
if(empty($_POST['idpaciente']))
    die ("Codigo do Paciente Invalido <br> Cadastro cancelado");
if(empty($_POST['idcolaborador']))
    die ("Codigo do Paciente Invalido <br> Cadastro cancelado");
if(empty($_POST['data']))
    die ("Data da Analise Invalida  <br> Cadastro cancelado");
if(empty($_POST['hora']))
    die("Horario da consulta Invalida  <br> Cadastro cancelado");


$id = $_POST['id'];
$paciente = $_POST['idpaciente'];
$colaborador = $_POST['idcolaborador'];
$data = $_POST['data'];
$hora = $_POST['hora'];
$atendido = $_POST['atendido'];
if(isset($_POST['obs']))
$obs = $_POST['obs'];
else
$obs = "";



echo "Paciente: $paciente <br>";
echo "Colaborador: $colaborador <br>";
echo "data: $data <br>";
echo "hora: $hora <br>";
echo "Atendido: $atendido <br>";
echo "Observações: $obs <br>";


include 'conexao.php';
$sql = "UPDATE agendamento SET id_paciente='$paciente',id_colaboradores='$colaborador',DiaConsulta='$data',Hora='$hora',Atendido='$atendido',obs='$obs' where ProtocoloAgendamento = '$id'";  
mysqli_query($con,$sql) or die("Erro ao gravar informações no Banco de dados ". mysqli_error($con));

echo "<a href='listagem.php'>Listagem</a>";
?>