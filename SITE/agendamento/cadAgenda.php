<?php
header("Content-type: text/html; charset=utf-8");
$paciente = $_POST['idpaciente'];
$colaborador = $_POST['idcolaborador'];
$data = $_POST['data'];
$hora = $_POST['hora'];
$atendido = $_POST['atendido'];
if(isset($_POST['obs']))
$obs = $_POST['obs'];
else
$obs = "";


if(empty($paciente))
    die ("Codigo do Paciente Invalido <br> Cadastro cancelado");
if(empty($colaborador))
    die ("Codigo do Paciente Invalido <br> Cadastro cancelado");
if(empty($data))
    die ("Data da Analise Invalida  <br> Cadastro cancelado");
if(empty($hora))
    die("Horario da consulta Invalida  <br> Cadastro cancelado");


echo "Paciente: $paciente <br>";
echo "Colaborador: $colaborador <br>";
echo "data: $data <br>";
echo "hora: $hora <br>";
echo "Atendido: $atendido <br>";
echo "Observações: $obs <br>";

include('../conexao.php');
//$con = mysqli_connect('localhost','root','','sistema') or die("Erro ao conectar ao banco de dados ".mysqli_error($con));
$sql = "INSERT INTO AGENDAMENTO (id_paciente,id_colaboradores,DiaConsulta,Hora,Atendido,obs) VALUES ('$paciente','$colaborador','$data','$hora','$atendido','$obs')";

mysqli_query($con,$sql) or die("Erro ao gravar informações no Banco de dados ". mysqli_error($econ));

echo"<a href='agendamento.php'>Voltar</a>";
?>