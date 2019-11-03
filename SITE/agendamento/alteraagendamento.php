<html lang="pt-br">
	<head>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Altera Agendamento</title>
		<link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.css">
	</head>
	<body>
	<?php
        $arquivo = substr(strrchr(__FILE__, DIRECTORY_SEPARATOR), 1);
		include('../cabecalho.php');
		include 'conexao.php';
		$id = $_GET['id'];
		$sql="select * From agendamento where ProtocoloAgendamento=$id";
		$registro=mysqli_query ($con,$sql) or die ("erro ao executar comando mysql".mysqli_error($con));
		$linha=mysqli_num_rows ($registro);
		if ($linha<1)
		die ("registro não existe mais na base de dados");
	
		$dados=mysqli_fetch_array($registro);
		//$protocolo=$dados['ProtocoloAgendamento'];
		$paciente=$dados['id_paciente'];
		$colaboradores=$dados ['id_colaboradores'];
		$dia=$dados ['DiaConsulta'];
		$hora=$dados ['Hora'];
		$atendido=$dados ['Atendido'];
		$obs=$dados ['obs'];
    ?>
	<div class="container mt-5">
	<form method="POST" action="alterar.php" enctype="multipart/form-data">
		<br>
		<input type = "hidden"  name = "id" value = "<?php echo $id ?>">
		<h1 class="display-4">Agendamento</h1>
		<hr>
		<div class="form-group row">
			<div class="col-lg-6 col-sm-12">
				<label>Paciente:</label> 
				<input  class="form-control" type="number" name="idpaciente"  min="0" size="30"placeholder="informe o id" value="<?php echo $paciente ?>">
			</div>
			<div class="col-lg-6 col-sm-12">
				<label>Atendente:</label>
				<input class="form-control" type="number" name="idcolaborador" min="0" size="30" placeholder="informe o id" value="<?php echo $colaboradores?>">
			</div>
		</div>
		<div class="form-group row">
			<div class="col-lg-4 col-sm-12">
				<label>DiaConsulta:</label>
				<input class="form-control" type="date" name="data" min="2019-10-01" value="<?php echo $dia?>">
			</div>
			<div class="col-lg-4 col-sm-12">
				<label>Hora:</label>
				<input class="form-control" type="time" name="hora" value="<?php echo $hora?>">
			</div>
			<div class="col-lg-4 col-sm-12">
				<label>atendido:</label>
				<br>
				<label>Sim</label><input type="radio" name="atendido" value="1" <?php if ($atendido==1) echo"checked"?>>
				<label>Não</label><input type="radio" name="atendido" value="0" <?php if ($atendido==0) echo"checked"?>>
			</div>
		</div>
		<div class="form-group row">
			<div class="col-12">
				<label>obs:</label>
				<br>
				<textarea class="form-control" rows="5" cols="150" name="obs"><?php echo $obs?></textarea>
			</div>
		</div>
		<div class="form-group row">
			<div class="col-3 col-lg-1">
				<input class="btn btn-dark" type="submit" value="Alterar">
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