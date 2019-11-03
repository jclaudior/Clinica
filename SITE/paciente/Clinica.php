<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title> Cadastro - paciente </title>
		<link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.css">
	</head>
	
	<body>
	<?php 
        $arquivo = substr(strrchr(__FILE__, DIRECTORY_SEPARATOR), 1);
        include('../cabecalho.php')
        
    ?>
	<div class="container mt-5">
		<br>
		<h1 class="display-3">Cadastro Paciente</h1>
				<p> Preencha os campos </p>
				<form action="GravarClinica.php" method="post" enctype="multipart/form-data">
				<hr><br>
					<div class="form-group row">
						<div class="col-lg-8 col-sm-12">
							<label>Nome:</label>
							<input class="form-control" type="text" name="nome" size="30" maxlength="80" placeholder="Ex: João Silva">
						</div>
						<div class="col-lg-4 col-sm-12">	
							<label>Data de nascimento:</label>
							<input class="form-control" type="date" name="dataNascimento">
						</div>
					</div>
					<div class="form-group row">
						<div class="col-lg-4 col-sm-12">
							<label>RG:</label>			
							<input class="form-control" type="text" name="RGpaciente" size="30" min="9" max="9" placeholder="Somente numerais e caracteres">
						</div>
						<div class="col-lg-4 col-sm-12">
							<label>CPF:</label>		
							<input class="form-control" type="text" name="CPFpaciente" size="30" min="11" max="11" placeholder="Somente numerais">
						</div>
						<div class="col-lg-4 col-sm-12">
							<label>SEXO:</label>
							<br>
							<input type="radio" name="sexo" value="M" checked><label>Masculino</label> 
							<input type="radio" name="sexo" value="F"><label>Feminino</label>
						</div>
					</div>
					<div class="form-group row">
						<div class="col-lg-4 col-sm-12">	
							<label>DDD:</labeL>
							<input class="form-control" type="text" name="DDD" placeholder="00" maxlenght="2" size="4">
						</div>
						<div class="col-lg-4 col-sm-12">
							<label>Telefone/Celular:</label>
							<input class="form-control" type="text" name="telefone" size="30" min="8" max="9" placeholder="Somente numerais">
						</div>
						<div class="col-lg-4 col-sm-12">
							<label>email:</label>
							<input class="form-control" type="email" name="email" size="30" maxlength="100" placeholder="email@email.com">
						</div>
					</div>
					<div class="form-group row">
						<div class="col-lg-3 col-sm-12">
							<label>Conveniado:</label> <br>
							<input type="checkbox" name="conveniado" value="1"><label>Sim</label>
						</div>
						<div class="col-lg-6 col-sm-12">
							<label>Região preferencial de atendimento:</label> 
							<select name="regiao" class="form-control">
								<option value=""> Selecione </option>
								<option value="N"> Norte </option>
								<option value="L"> Leste </option>
								<option value="O"> Oeste </option>
								<option value="S"> Sul </option>
								<option value="C"> Centro </option>
							</select>
						</div>
					</div>
				<input class="btn btn-dark" type="submit" value="cadastrar">
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