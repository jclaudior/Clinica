<?php
header("Content-type: text/html; charset=utf-8");

if(empty($_POST['codPaciente']))
    die ("Codigo do Paciente Invalido Cadastro cancelado");
if(empty($_POST['tipo']))
    die("Tipo de Analise Invalida  <br> Cadastro cancelado");
if(empty($_POST['preco']))
    die("Preco invalido  <br> Cadastro cancelado");
if(empty($_POST['data']))
    die ("Data da Analise Invalida  <br> Cadastro cancelado");
if(empty($_POST['hora']))
    die("Horario da consulta Invalida  <br> Cadastro cancelado");

$paciente = $_POST['codPaciente'];
$tipo = $_POST['tipo'];
$preco = $_POST['preco'];
$data = $_POST['data'];
$hora = $_POST['hora'];
$concluido = $_POST['concluido'];
if(isset($_POST['obs']))
$obs = $_POST['obs'];
else
$obs = "";
if(count($_FILES)>0){
    $nomeAnexo = $_FILES['anexo']['name'];

    $tamanhoAnexo = $_FILES['anexo']['size'];

    $tipoAnexo = $_FILES['anexo']['type'];

    $anexoTemporario = $_FILES['anexo']['tmp_name'];
}
if($preco < 5 || $preco > 9999)
    die("Preco invalido  <br> Cadastro cancelado");

echo "Paciente: $paciente <br>";
echo "tipo: $tipo <br>";
echo "preço: $preco <br>";
echo "data: $data <br>";
echo "hora: $hora <br>";
echo "Concluido: $concluido <br>";
echo "Observações: $obs <br>";

if($nomeAnexo <> ""){
    echo "Nome do Anexo: $nomeAnexo <br>";
    echo "Tipo de Anexo: $tipoAnexo <br>";
    echo "Tamanho do Anexo: $tamanhoAnexo <br>";
    echo "Caminho Anexo Temporario: $anexoTemporario <br>";
    
    $nomeFinal = "anexos/".$nomeAnexo;

    if(move_uploaded_file($anexoTemporario,$nomeFinal))
        echo "Anexo Movido Com Sucesso.";
    else    
        echo "Erro ao mover arquivo";
}

require("conecta.php");

$sql = "INSERT INTO ANALISE_MEDICA (idPaciente,tipoAnalise,preco,dataAnalise,horarioAnalise,concluido,anexo,obs) VALUES ('$paciente','$tipo','$preco','$data','$hora','$concluido','$nomeAnexo','$obs')";

mysqli_query($con,$sql) or die("Erro ao gravar informações no Banco de dados ". mysqli_error($econ));

echo "Cadastro Realizado com Sucesso!!";
?>