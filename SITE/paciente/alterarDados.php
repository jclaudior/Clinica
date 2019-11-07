<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title> Alteração - paciente </title>
		<link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.css">
	</head>
	
	<body>
	<?php 
        $arquivo = substr(strrchr(__FILE__, DIRECTORY_SEPARATOR), 1);
		include('../cabecalho.php');
		
		$codigo = $_GET["id"];
		include("../conexao.php");
		
		$sql = "select * from pacientes where id = $codigo";
		
		$recordSet = mysqli_query($con, $sql) or die ("Erro ao consultar dados no banco (paciente)".
		mysqli_error($con));
		
		$registro = mysqli_fetch_array($recordSet);
		
		$nome = $registro["nome"];
		$dataNascimento = $registro ["dataNascimento"];
		$rg = $registro ["RGpaciente"];
		$cpf = $registro["CPFpaciente"];
		$conveniado = $registro ["conveniado"];
		$sexo = $registro["sexo"];
		$email = $registro["email"];
		$ddd = $registro["ddd"];
		$telefone = $registro["numero"];
		$regiao = $registro["regiao"];
		
		$conveniadoSim = "";
		if ($conveniado == 1){
			$conveniadoSim = "checked";
		}
		
		$masc = "";
		$fem = "";
		if ($sexo == 'F'){
			$fem = "checked";
		}
		else {
			$masc = "checked";
		}
		
		$regiao_N = "";
		$regiao_L = "";
		$regiao_O = "";
		$regiao_S = "";
		$regiao_C = "";
		
		if ($regiao == "N"){
			$regiao_N = "selected";
		}
		if ($regiao == "L"){
			$regiao_L = "selected";
		}
		if ($regiao == "O"){
			$regiao_O = "selected";
		}
		if ($regiao == "S"){
			$regiao_S = "selected";
		}
		if ($regiao == "C"){
			$regiao_C = "selected";
		}
 	?>
	<div class="container mt-5">
		<br>
		<h1 class="display-3">Listagem Paciente</h1>
				<form action="GravarAlteracaoClinica.php" method="post" enctype="multipart/form-data">
				<input type="hidden" name="id" value="<?php echo $codigo ?>">
				<hr><br>
					<div class="form-group row">
						<div class="col-lg-8 col-sm-12">
							<label>Nome:</label>
							<input class="form-control" type="text" name="nome" size="30" maxlength="80" value="<?php echo $nome ?>">
						</div>
						<div class="col-lg-4 col-sm-12">	
							<label>Data de nascimento:</label>
							<input class="form-control" type="date" name="dataNascimento" value="<?php echo $dataNascimento ?>">
						</div>
					</div>
					<div class="form-group row">
						<div class="col-lg-4 col-sm-12">
							<label>RG:</label>			
							<input class="form-control" type="text" name="RGpaciente" size="30" min="9" max="9" placeholder="Somente numerais e caracteres" value = "<?php echo $rg ?>">
						</div>
						<div class="col-lg-4 col-sm-12">
							<label>CPF:</label>		
							<input class="form-control" type="text" name="CPFpaciente" size="30" min="11" max="11" placeholder="Somente numerais" value = "<?php echo $cpf ?>">
						</div>
						<div class="col-lg-4 col-sm-12">
							<label>SEXO:</label>
							<br>
							<input type="radio" name="sexo" value="M"<?php echo $masc ?>><label>Masculino</label> 
							<input type="radio" name="sexo" value="F"<?php echo $fem ?>><label>Feminino</label>
						</div>
					</div>
					<div class="form-group row">
						<div class="col-lg-4 col-sm-12">	
							<label>DDD:</labeL>
							<input class="form-control" type="text" name="DDD" maxlenght="2" size="4" value ="<?php echo $ddd ?>">
						</div>
						<div class="col-lg-4 col-sm-12">
							<label>Telefone/Celular:</label>
							<input class="form-control" type="text" name="telefone" size="30" min="8" max="9" value="<?php echo $telefone?>">
						</div>
						<div class="col-lg-4 col-sm-12">
							<label>email:</label>
							<input class="form-control" type="email" name="email" size="30" maxlength="100" placeholder="email@email.com" value = "<?php echo $email ?>">
						</div>
					</div>
					<div class="form-group row">
						<div class="col-lg-3 col-sm-12">
							<label>Conveniado:</label> <br>
							<input type="checkbox" name="conveniado" value="1" <?php echo $conveniadoSim ?>><label>Sim</label>
						</div>
						<div class="col-lg-6 col-sm-12">
							<label>Região preferencial de atendimento:</label> 
							<select name="regiao" class="form-control">
								<option value="S"> Selecione </option>
								<option value="N" <?php echo $regiao_N ?>> Norte </option>
								<option value="L" <?php echo $regiao_L ?>> Leste </option>
								<option value="O" <?php echo $regiao_O ?>> Oeste </option>
								<option value="S" <?php echo $regiao_S ?>> Sul </option>
								<option value="C" <?php echo $regiao_C ?>> Centro </option>
							</select>
						</div>
					</div>
				<input class="btn btn-dark" type="submit" value="Alterar">
				<input class="btn btn-dark" type="reset" value="limpar">
				</form><br>
				<hr>
	</div>
	<?php include('../rodape.php')?>
        
        <script src="../node_modules/jquery/jquery.js"></script>
        <script src="../node_modules/popper.js/dist/umd/popper.js"></script>
        <script src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>
	</body>
</html>