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
        $arquivo = substr(strrchr(__FILE__, DIRECTORY_SEPARATOR), 1);
        include('../cabecalho.php');
	?>
	<div class="container mt-5">
	<h1 class="display-3">Cadastro Prontuario</h1>
	<hr>
 <form method="POST" action="cadProntuario.php">
 	<div class="form-group row">
	 <div class="col-sm-12 col-lg-12">
	 	Diagnostico:
 		<input class="form-control" type="text" name="diagnostico"> 
	 </div>
	 <div class="col-sm-12 col-lg-12">
 		Data:
 		<input class="form-control" type="date" name="date">
 	</div>
	 <div class="col-sm-12 col-lg-12">
	 	Receita:
 		<input class="form-control" type="text" name="Receita">
	 </div>
	 <div class="col-sm-12 col-lg-12">
 		Evolução:
 		<input class="form-control" type="text" name="Evolucao">
	 </div>
	 <div class="col-sm-12 col-lg-12">
 		Sumário De Alta:
 		<input class="form-control" type="text" name="sumarioDeAlta">
	 </div>
	 <div class="col-sm-12 col-lg-12">
 		Prescrição:
 		<input class="form-control" type="text" name="prescricao">
	 </div>
</div>
<input class="btn btn-dark" type="submit" value="Enviar">
 </form>


<br>

</div>

<?php include('../rodape.php')?>
        <script src="../node_modules/jquery/jquery.js"></script>
        <script src="../node_modules/popper.js/dist/umd/popper.js"></script>
        <script src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>
</body>
</html>