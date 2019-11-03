<html lang="pt-br">	
	<head>
		<title>Alteração de Colaborador</title>
	</head>
	
	<body>
		<center>

		<h2>Alteração de Colaborador</h2>

		<?php
			if(! isset($_GET['c']))
			die("Forma de chamada da rotina de alteração incorreta!!");
			$codigo = $_GET['c'];
			include "conexao.php";
			$sql = "SELECT * FROM colaboradores WHERE ID_colaboradores=$codigo";
			// Executar o comando ($sql) no MYSQL
			$registro = mysqli_query($con, $sql);
			// Encontrou ?
			$linhas = mysqli_num_rows($registro);
			if ($linhas<1) {
				// Não encontrou
				die("Time id: $codigo não existe mais");
			}
			// Criar $dados que e um vetor/matriz da 1ª linha
			$dados = mysqli_fetch_array($registro);
			// Transferindo dados do vetor p/ variaveis
			$nomeCola 		= $dados["nomeColaborador"];
			$rgCola 		= $dados["rgColaborador"];
			$cpfCola 		= $dados["cpfColaborador"];
			$espCola 		= $dados["especialidade"];
			$obsCola 		= $dados["obs"];
			$admiCola 		= $dados["dataAdmissao"];
			$demiCola 		= $dados["dataDemissao"];
			$depCola 		= $dados["departamento"];
			$salaCola 		= $dados["sala"];
			$tConCola 		= $dados["tipoContrato"];
			$tRemuCola 		= $dados["tipoRemuneracao"];
			$tPgmtCola 		= $dados["tipoPagamento"];
			$remuneCola 	= $dados["remuneColaborador"];
			$valorCola 		= $dados["valorColaborador"];
			$dVtCola 		= $dados["descVT"];
			$dVrCola 		= $dados["descVR"];
			$entCola 		= $dados["hraEntrada"];
			$saiCola 		= $dados["hraSaida"];

			$dsDomCola 		= $dados["jDom"];
			$dsSegCola 		= $dados["jSeg"];
			$dsTerCola 		= $dados["jTer"];
			$dsQuaCola 		= $dados["jQua"];
			$dsQuiCola 		= $dados["jQui"];
			$dsSexCola 		= $dados["jSex"];
			$dsSabCola 		= $dados["jSab"];
		?>	

		<form action="gravarAlterar.php" method="post" enctype="multipart/form-data">

		<input type="hidden" name="id" value="<?php echo $codigo; ?>">

			<fieldset>
				<legend><h2>Dados Pessoais</h2></legend>
				<table border="1">
					<tr>
						<th>Nome</th>
						<th>RG</th>
						<th>CPF</th>
						<th>Especialidade</th>
					</tr>
					<tr>
						<td><input type="text" name="nomeColaborador" maxlength="30" size="16" placeholder="Insira o Nome" required value="<?php echo $nomeCola; ?>"></td>
						<td><input type="text" name="rgColaborador" maxlength="12" size="16" placeholder="Insira o RG" required value="<?php echo $rgCola; ?>"></td>
						<td><input type="text" name="cpfColaborador" maxlength="14" size="16" placeholder="Insira o CPF" required value="<?php echo $cpfCola; ?>"></td>
						<td><input type="text" name="especialidadeColaborador" maxlength="20" size="16" placeholder="Especialidade" required value="<?php echo $espCola; ?>"></td>
					</tr>
					<tr>
						<th colspan="8">Observações</th>
					</tr>
					<tr>
						<td colspan="8"><textarea name="obsColaborador" rows="10" cols="83" placeholder="Informações complementares"><?php echo $obsCola; ?></textarea></td>
					</tr>
				</table>
			</fieldset>
			<fieldset>
				<legend><h2>Dados Para Cadastro</h2></legend>
					<table border="1">
						<tr>
							<th>Data Admissão:</th>
							<td><input type="date" name="dataAdmiColaborador" value="<?php echo $admiCola; ?>"></td>
							<th>Data Demissão:</th>
							<td><input type="date" name="dataDemiColaborador" value="<?php echo $demiCola; ?>"></td>
						</tr>
						<tr>
							<th>Departamento:</th>
							<td><input type="text" name="departamentoColaborador" maxlength="30" size="16" placeholder="Insira o Departamento" value="<?php echo $depCola; ?>"></td>
							<th>Sala:</th>
							<td><input type="text" name="salaColaborador" maxlength="4" size="16" placeholder="Insira a Sala" value="<?php echo $salaCola; ?>"></td>
						</tr>
						<?php 
							$checkIndeter ="";
							$checkDetermi ="";
							if ($tConCola =="Indeterminado")
							$checkIndeter ="checked";
							if ($tConCola =="Determinado")
							$checkDetermi ="checked";
						?>
						<tr>
							<th>Tipo Contrato:</th>
							<td colspan="3"><center>
								<input type="radio" name="tipoContrato" value="Indeterminado" <?php echo $checkIndeter;?>>Contrato de trabalho por prazo Indeterminado<br>
								<input type="radio" name="tipoContrato" value="Determinado" <?php echo $checkDetermi;?>>Contrato de trabalho por prazo Determinado</center></td>
						</tr>
						<?php 
							$checkMensal ="";
							$checkQuinzenal ="";
							$checkSemanal ="";
							$checkDiario ="";
							$checkHorario ="";
							if ($tRemuCola =="Mensal")
							$checkMensal ="checked";
							if ($tRemuCola =="Quinzenal")
							$checkQuinzenal ="checked";
							if ($tRemuCola =="Semanal")
							$checkSemanal ="checked";
							if ($tRemuCola =="Diario")
							$checkDiario ="checked";
							if ($tRemuCola =="Horario")
							$checkHorario ="checked";
						?>
						<tr>
							<th>Tipo de Remuneração:</th>
							<td colspan="3"><center>
								<input type="radio" name="tipoRemune" value="Mensal" <?php echo $checkMensal;?>>Mensal
								<input type="radio" name="tipoRemune" value="Quinzenal" <?php echo $checkQuinzenal;?>>Quinzenal
								<input type="radio" name="tipoRemune" value="Semanal" <?php echo $checkSemanal;?>>Semanal
								<input type="radio" name="tipoRemune" value="Diario" <?php echo $checkDiario;?>>Diario
								<input type="radio" name="tipoRemune" value="Horario" <?php echo $checkHorario;?>>Horario</center>
							</td>
						</tr>
						<?php 
							$checkMensalpmgt ="";
							$checkSemanalpgmt ="";
							if ($tPgmtCola =="Mensal")
							$checkMensalpmgt ="checked";
							if ($tPgmtCola =="Semanal")
							$checkSemanalpgmt ="checked";
						?>
						<tr>
							<th>Tipo de Pagamento:</th>
							<td colspan="3"><center>
								<input type="radio" name="tipoPgmt" value="Mensal" <?php echo $checkMensalpmgt;?>>Mensal
								<input type="radio" name="tipoPgmt" value="Semanal" <?php echo $checkSemanalpgmt;?>>Semanal</center>
							</td>
						</tr>
						<?php 
							$checkFixa ="";
							$checkVariavel ="";
							if ($remuneCola =="Fixa")
							$checkFixa ="checked";
							if ($remuneCola =="Variavel")
							$checkVariavel ="checked";
						?>
						<tr>
							<th>Remuneração:</th>
							<td><center>
								<input type="radio" name="remuneColaborador" value="Fixa" <?php echo $checkFixa;?>>Fixa
								<input type="radio" name="remuneColaborador" value="Variavel" <?php echo $checkVariavel;?>>Variavel</center>
							</td>
							<th>Valor:</th>
							<td>
								<input type="text" name="valorColaborador" maxlength="10" size="16" placeholder="Insira o Valor" required value="<?php echo $valorCola; ?>">
							</td>
						</tr>
						<?php 
							$checkdVtColaS ="";
							$checkdVtColaN ="";
							if ($dVtCola =="1")
							$checkdVtColaS ="checked";
							if ($dVtCola =="0")
							$checkdVtColaN ="checked";

							$checkdVrColaS ="";
							$checkdVrColaN ="";
							if ($dVrCola =="1")
							$checkdVrColaS ="checked";
							if ($dVrCola =="0")
							$checkdVrColaN ="checked";
						?>
						<tr>
							<th>Descontar VT:</th>
							<td><center>
								<input type="radio" name="descVTColaborador" value="1" <?php echo $checkdVtColaS;?>>Sim
								<input type="radio" name="descVTColaborador" value="0" <?php echo $checkdVtColaN;?>>Não</center>
							</td>
							<th>Descontar VR/VA:</th>
							<td><center>
								<input type="radio" name="descVRColaborador" value="1" <?php echo $checkdVrColaS;?>>Sim
								<input type="radio" name="descVRColaborador" value="0" <?php echo $checkdVrColaN;?>>Não</center>
							</td>
						</tr>
					</table><br>
			</fieldset><br>
			<fieldset>
					<legend><h2>Jornada</h2></legend>
					<table border="1">
						<tr>
							<td></td>
							<th>Entrada</th>
							<th>Saída</th>
							<th>Dias da semana a considerar</th>
						</tr>
						<tr>
							<th>Horário</th>
								<td><input type="time" name="tabEntra" maxlength="4" size="16" value="<?php echo $entCola; ?>"></td>
								<td><input type="time" name="tabSai" maxlength="4" size="16" value="<?php echo $saiCola; ?>"></td>
							<td>
								<?php
									if ($dsDomCola=="Dom")
									echo '<input type="checkbox" name ="tabDiaSemDom" id ="tabDiaSemDom" value="Dom" checked>';
									else
									echo '<input type="checkbox" name ="tabDiaSemDom" id ="tabDiaSemDom" value="Dom">';
								?>Dom
								<?php
									if ($dsSegCola=="Seg")
									echo '<input type="checkbox" name ="tabDiaSemSeg" id ="tabDiaSemSeg" value="Seg" checked>';
									else
									echo '<input type="checkbox" name ="tabDiaSemSeg" id ="tabDiaSemSeg" value="Seg">';
								?>Seg
								<?php
									if ($dsTerCola=="Ter")
									echo '<input type="checkbox" name ="tabDiaSemTer" id ="tabDiaSemTer" value="Ter" checked>';
									else
									echo '<input type="checkbox" name ="tabDiaSemTer" id ="tabDiaSemTer" value="Ter">';
								?>Ter
								<?php
									if ($dsQuaCola=="Qua")
									echo '<input type="checkbox" name ="tabDiaSemQua" id ="tabDiaSemQua" value="Qua" checked>';
									else
									echo '<input type="checkbox" name ="tabDiaSemQua" id ="tabDiaSemQua" value="Qua">';
								?>Qua
								<?php
									if ($dsQuiCola=="Qui")
									echo '<input type="checkbox" name ="tabDiaSemQui" id ="tabDiaSemQui" value="Qui" checked>';
									else
									echo '<input type="checkbox" name ="tabDiaSemQui" id ="tabDiaSemQui" value="Qui">';
								?>Qui
								<?php
									if ($dsSexCola=="Sex")
									echo '<input type="checkbox" name ="tabDiaSemSex" id ="tabDiaSemSex" value="Sex" checked>';
									else
									echo '<input type="checkbox" name ="tabDiaSemSex" id ="tabDiaSemSex" value="Sex">';
								?>Sex
								<?php
									if ($dsSabCola=="Sab")
									echo '<input type="checkbox" name ="tabDiaSemSab" id ="tabDiaSemSab" value="Sab" checked>';
									else
									echo '<input type="checkbox" name ="tabDiaSemSab" id ="tabDiaSemSab" value="Sab">';
								?>Sab
							</td>
						</tr>
					</table>
				<hr size="5px">
					<input type="reset" value="Limpar">
					<input type="submit" value="Alterar">
				<hr size="5px">
			</fieldset>
		</form>
		</center>
	</body>
</html>