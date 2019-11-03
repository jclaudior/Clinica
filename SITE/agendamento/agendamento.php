<html lang="pt-br">
	<head>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Agendamento</title>
		<link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.css">
	</head>
	<body>
	<?php
        $arquivo = substr(strrchr(__FILE__, DIRECTORY_SEPARATOR), 1);
        include('../cabecalho.php');
    ?>
	<div class="container mt-5">
	<form method="POST" action="cadAgenda.php" enctype="multipart/form-data">
		<br>
		<h1 class="display-4">Agendamento</h1>
		<hr>
		<div class="form-group row">
			<div class="col-lg-6 col-sm-12">
				<label>Paciente:</label> 
				<input  class="form-control" type="number" name="idpaciente"  min="0" size="30"placeholder="informe o id">
			</div>
			<div class="col-lg-6 col-sm-12">
				<label>Atendente:</label>
				<input class="form-control" type="number" name="idcolaborador" min="0" size="30" placeholder="informe o id">
			</div>
		</div>
		<div class="form-group row">
			<div class="col-lg-4 col-sm-12">
				<label>DiaConsulta:</label>
				<input class="form-control" type="date" name="data" min="2019-10-01">
			</div>
			<div class="col-lg-4 col-sm-12">
				<label>Hora:</label>
				<input class="form-control" type="time" name="hora">
			</div>
			<div class="col-lg-4 col-sm-12">
				<label>atendido:</label>
				<br>
				<label>Sim</label><input type="radio" name="atendido" value="1">
				<label>Não</label><input type="radio" name="atendido" value="0" checked="">
			</div>
		</div>
		<div class="form-group row">
			<div class="col-12">
				<label>obs:</label>
				<br>
				<textarea class="form-control" rows="5" cols="150" name="obs"></textarea>
			</div>
		</div>
		<div class="form-group row">
			<div class="col-3 col-lg-1">
				<input class="btn btn-dark" type="submit" value="Cadastrar">
			</div>
			<div class="col-3 col-lg-1">
				<input class="btn btn-dark" type="reset" value="limpar">
			</div>
		</div>
	</form>
	</div>
	<?php include('../rodape.php')?>
    <script src="../node_modules/jquery/jquery.js"></script>
    <script src="../node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>
	</body>            
</html>