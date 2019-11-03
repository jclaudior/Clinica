<?php

    if(empty($_POST['codPaciente']))
        die ("Codigo do Paciente Invalido <br> Cadastro cancelado");
    if(empty($_POST['tipo']))
        die("Tipo de Analise Invalida  <br> Cadastro cancelado");
    if(empty($_POST['preco']))
        die("Preco invalido  <br> Cadastro cancelado");
    if(empty($_POST['data']))
        die ("Data da Analise Invalida  <br> Cadastro cancelado");
    if(empty($_POST['hora']))
        die("Horario da consulta Invalida  <br> Cadastro cancelado");

    $id=$_POST['id'];
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
    $nomeAnexo = $_FILES['anexo']['name'];
    $tamanhoAnexo = $_FILES['anexo']['size'];
    $tipoAnexo = $_FILES['anexo']['type'];
    $anexoTemporario = $_FILES['anexo']['tmp_name'];

    if($preco < 5 || $preco > 9999)
    die("Preco invalido  <br> Cadastro cancelado");

    if(empty($paciente))
        die ("Codigo do Paciente Invalido <br> Cadastro cancelado");
    if(empty($tipo))
        die("Tipo de Analise Invalida  <br> Cadastro cancelado");
    if($preco < 5 || $preco > 9999)
        die("Preco invalido  <br> Cadastro cancelado");
    if(empty($data))
        die ("Data da Analise Invalida  <br> Cadastro cancelado");
    if(empty($hora))
        die("Horario da consulta Invalida  <br> Cadastro cancelado");
    
    require("conecta.php");

    $sql = "UPDATE ANALISE_MEDICA SET idPaciente='$paciente',tipoAnalise='$tipo',preco='$preco',dataAnalise='$data',horarioAnalise='$hora',concluido='$concluido',obs='$obs'";
    
    if($_FILES['anexo']['name']){
        $nomeAnexo =$_FILES['anexo']['name'];
        $nomeFinal = "anexos/".$nomeAnexo;

        if(move_uploaded_file($anexoTemporario,$nomeFinal)){
            echo "Anexo Movido Com Sucesso.";
            $sql .= ", anexo='$nomeAnexo'";
        }
        else    
            echo "Erro ao mover arquivo";   
    }

    $sql .= "WHERE id='$id'";
    mysqli_query($con,$sql) or die("Erro ao atualizar informações no Banco de dados ". mysqli_error($econ));

    echo "<br>Aleração Realizada com sucesso!";
    echo "<br><a href='listagemAnalise.php'>Voltar</a>";

?>