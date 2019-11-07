<!DOCTYPE html>
<html lan="pt-br">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Clinica</title>
	<link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.css">
</head>
<body>
	<?php
	$codigo = $_GET ['id'];
	include ('../conexao.php');
	$sql = "select * from prontuario where ID_prontuario =  $codigo";

	$recordSet = mysqli_query($con, $sql) or die ("Erro ao consultar dados no banco (prontuario)" . mysqli_error($con));

	$registro = mysqli_fetch_array($recordSet);

	$diagnostico = $registro ['diagnostico'];
	$data = $registro ['data'];
	$Receita = $registro ['Receita'];
	$Evolucao = $registro ['Evolucao'];
	$sumarioDeAlta = $registro ['sumarioDeAlta'];
	$prescricao = $registro ['prescricao'];

	
        $arquivo = substr(strrchr(__FILE__, DIRECTORY_SEPARATOR), 1);
        include('../cabecalho.php');
	?>
	<div class="container mt-5">
	<h1 class="display-3">Altera Prontuario</h1>
	<hr>
	<div id="form">
 <form method="POST" action="gravarProntuario.php">
 	<input type="hidden" name="id" value="<?php echo $codigo ?>">
	 <div class="form-group row">
	 <div class="col-sm-12 col-lg-12">
	 	Diagnostico:
 		<input class="form-control" type="text" name="diagnostico" value="<?php echo $diagnostico ?>"> 
	 </div>
	 <div class="col-sm-12 col-lg-12">
 		Data:
 		<input class="form-control" type="date" name="date" value="<?php echo $data ?>">
 	</div>
	 <div class="col-sm-12 col-lg-12">
	 	Receita:
 		<input class="form-control" type="text" name="Receita" value="<?php echo $Receita ?>">
	 </div>
	 <div class="col-sm-12 col-lg-12">
 		Evolução:
 		<input class="form-control" type="text" name="Evolucao" value="<?php echo $Evolucao ?>">
	 </div>
	 <div class="col-sm-12 col-lg-12">
 		Sumário De Alta:
 		<input class="form-control" type="text" name="sumarioDeAlta" value="<?php echo $sumarioDeAlta ?>">
	 </div>
	 <div class="col-sm-12 col-lg-12">
 		Prescrição:
 		<input class="form-control" type="text" name="prescricao" value="<?php echo $prescricao ?>">
	 </div>
	</div>
	 <input class="btn btn-dark" type="submit" value="Alterar">
 </form>
</div>

<br>
<div id="final">
	Fim do cadastro.

</div>
<?php
include('../rodape.php');


?>
	<script src="../node_modules/jquery/jquery.js"></script>
    <script src="../node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>
</body>
</html>