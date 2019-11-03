<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Form Cadastro de Colaboradores</title>
	<link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.css">
</head>
<body>
		<?php
            $arquivo = substr(strrchr(__FILE__, DIRECTORY_SEPARATOR), 1);
            include('../cabecalho.php');
         ?>
		<form action="phpForm1.php" method="post" enctype="multipart/form-data">
		<div class="container mt-5">
			<br>
			<h1 class="display-3">Cadastro de Colaboradores</h1>
			<br>
			<fieldset>
				<legend><h2 class="display-3">Dados Pessoais</h2></legend>
				<table border="0" class="table">
					<tr>
						<th>Nome</th>
						<th>RG</th>
						<th>CPF</th>
						<th>Especialidade</th>
					</tr>
					<tr>
						<td><input class="form-control" type="text" name="nomeColaborador" maxlength="30" size="16" placeholder="Insira o Nome" required></td>
						<td><input class="form-control" type="text" name="rgColaborador" maxlength="12" size="16" placeholder="Insira o RG" required></td>
						<td><input class="form-control" type="text" name="cpfColaborador" maxlength="14" size="16" placeholder="Insira o CPF" required></td>
						<td><input class="form-control" type="text" name="especialidadeColaborador" maxlength="20" size="16" placeholder="Especialidade" required></td>
					</tr>
					<tr>
						<th colspan="8">Observações</th>
					</tr>
					<tr>
						<td colspan="8"><textarea class="form-control" name="obsColaborador" rows="10" cols="83" placeholder="Informações complementares"></textarea></td>
					</tr>
				</table>
			</fieldset>
			<fieldset>
				<legend><h2 class="display-3">Dados Para Cadastro</h2></legend>
					<table border="0" class="table">
						<tr>
							<th>Data Admissão:</th>
							<td><input class="form-control" type="date" name="dataAdmiColaborador"></td>
							<th>Data Demissão:</th>
							<td><input class="form-control" type="date" name="dataDemiColaborador"></td>
						</tr>
						<tr>
							<th>Departamento:</th>
							<td><input class="form-control" type="text" name="departamentoColaborador" maxlength="30" size="16" placeholder="Insira o Departamento"></td>
							<th>Sala:</th>
							<td><input class="form-control" type="text" name="salaColaborador" maxlength="4" size="16" placeholder="Insira a Sala"></td>
						</tr>
						<tr>
							<th>Tipo Contrato:</th>
							<td colspan="3"><center>
								<input type="radio" name="tipoContrato" value="Indeterminado" checked>Contrato de trabalho por prazo Indeterminado<br>
								<input type="radio" name="tipoContrato" value="Determinado">Contrato de trabalho por prazo Determinado</center></td>
						</tr>
						<tr>
							<th>Tipo de Remuneração:</th>
							<td colspan="3"><center>
								<input type="radio" name="tipoRemune" value="Mensal" checked>Mensal
								<input type="radio" name="tipoRemune" value="Quinzenal">Quinzenal
								<input type="radio" name="tipoRemune" value="Semanal">Semanal
								<input type="radio" name="tipoRemune" value="Diario">Diario
								<input type="radio" name="tipoRemune" value="Horario">Horario</center>
							</td>
						</tr>
						<tr>
							<th>Tipo de Pagamento:</th>
							<td colspan="3"><center>
								<input type="radio" name="tipoPgmt" value="Mensal" checked>Mensal
								<input type="radio" name="tipoPgmt" value="Semanal">Semanal</center>
							</td>
						</tr>
						<tr>
							<th>Remuneração:</th>
							<td><center>
								<input type="radio" name="remuneColaborador" value="Fixa" checked>Fixa
								<input type="radio" name="remuneColaborador" value="Variavel">Variavel</center>
							</td>
							<th>Valor:</th>
							<td>
								<input class="form-control" type="text" name="valorColaborador" maxlength="10" size="16" placeholder="Insira o Valor" required>
							</td>
						</tr>
						<tr>
							<th>Descontar VT:</th>
							<td><center>
								<input type="radio" name="descVTColaborador" value="1" checked>Sim
								<input type="radio" name="descVTColaborador" value="0">Não</center>
							</td>
							<th>Descontar VR/VA:</th>
							<td><center>
								<input type="radio" name="descVRColaborador" value="1" checked>Sim
								<input type="radio" name="descVRColaborador" value="0">Não</center>
							</td>
						</tr>
					</table><br>
			</fieldset><br>
			<fieldset>
					<legend><h2 class="display-3">Jornada</h2></legend>
					<table border="0" class="table">
						<tr>
							<td></td>
								<th>Entrada</th>
								<th>Saída</th>
								<th>Dias da semana a considerar</th>
							</tr>
						<tr>
							<th>Horário</th>
								<td><input class="form-control" type="time" name="tabEntra" maxlength="4" size="16"></td>
								<td><input class="form-control" type="time" name="tabSai" maxlength="4" size="16"></td>
							<td>
								<input type="checkbox" name="tabDiaSemDom" value="1">Dom
								<input type="checkbox" name="tabDiaSemSeg" value="1">Seg
								<input type="checkbox" name="tabDiaSemTer" value="1">Ter
								<input type="checkbox" name="tabDiaSemQua" value="1">Qua
								<input type="checkbox" name="tabDiaSemQui" value="1">Qui
								<input type="checkbox" name="tabDiaSemSex" value="1">Sex
								<input type="checkbox" name="tabDiaSemSab" value="1">Sab
							</td>
						</tr>
					</table>
				<hr size="5px">
					<input class="btn btn-dark" type="reset" value="Limpar">
					<input class="btn btn-dark" type="submit" value="Enviar">
				<hr size="5px">
			</fieldset>
		</div>
		</form>
		<?php include('../rodape.php')?>
        <script src="../node_modules/jquery/jquery.js"></script>
        <script src="../node_modules/popper.js/dist/umd/popper.js"></script>
        <script src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>
</body>
</html>