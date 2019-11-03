<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Alteração de Analise</title>
        <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.css">
    </head>
    <body>
        <?php
            $arquivo = substr(strrchr(__FILE__, DIRECTORY_SEPARATOR), 1);
            include('../cabecalho.php');
        ?>
        <div class="container">
        <br>
        <h1 class="display-3 mt-5">Alteração de Analise</h1>
        <hr>
        <?php
            require('conecta.php');
            
            if(empty($_GET['id']))
                die("Chamada para alteração Invalida!");
            
            $id = $_GET['id'];
            
            $sql = "SELECT * FROM ANALISE_MEDICA WHERE id=$id";
            
            $registro = mysqli_query($con, $sql) or die("Erro ao executar Query" . mysqli_error($con));

            $linhas = mysqli_num_rows($registro);

            if($linhas < 1)
                die("Registro não existe mais na base de dados!");
            
            $dados = mysqli_fetch_array($registro);

            $paciente = $dados['idPaciente'];
            $tipo =  $dados['tipoAnalise'];
            $preco = $dados['preco'];
            $data = $dados['dataAnalise'];
            $horario = $dados['horarioAnalise'];
            $concluido = $dados['concluido'];
            $anexo = $dados['anexo'];
            $obs = $dados['obs'];

        ?>
        <fieldset>
            <form method="POST" action="alterar.php" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $id ?>">
                <div class="form-group row">
                    <div class="col-lg-4 col-sm-12">
                        <label>Cod. Paciente:</label>
                        <input class="form-control" type="number" name="codPaciente" min="0" placeholder="Digite o cod. do paciente" size="40" value="<?php echo $paciente ?>">
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <label>Tipo de Analise:</label>
                        <select name="tipo" class="form-control">
                            <option value="">Selecione</option>
                            <option value="BetaHCG" <?php if($tipo == "BetaHCG") echo "selected"?>>Beta HCG</option>
                            <option value="Colesterol" <?php if($tipo == "Colesterol") echo "selected"?>>Colesterol</option>
                            <option value="Glicose" <?php if($tipo == "Glicose") echo "selected"?>>Glicose</option>
                            <option value="Hemoglobina Glicada Fração A1c" <?php if($tipo == "Hemoglobina Glicada Fração A1c") echo "selected"?>>Hemoglobina Glicada Fração A1c</option>
                            <option value="Hemograma Completo" <?php if($tipo == "Hemograma Completo") echo "selected"?>>Hemograma Completo</option>
                            <option value="PSA" <?php if($tipo == "PSA") echo "selected"?>>PSA Total</option>
                            <option value="TGO" <?php if($tipo == "TGO") echo "selected"?>>TGO – Transaminase Glutâmica Oxalacética</option>
                            <option value="TGP" <?php if($tipo == "TGP") echo "selected"?>>TGP – Transaminase Glutâmico Pirúvica</option>
                            <option value="Triglicérides Soro" <?php if($tipo == "Triglicérides Soro") echo "selected"?>>Triglicérides, Soro</option>
                            <option value="TSH Hormônio Tireoestimulante" <?php if($tipo == "TSH Hormônio Tireoestimulante") echo "selected"?>>TSH – Hormônio Tireoestimulante</option>
                            <option value="Urina Tipo 1" <?php if($tipo == "Urina Tipo 1") echo "selected"?>>Urina Tipo 1</option>
                            <option value="Vitamina D-25 Hidroxi" <?php if($tipo == "Vitamina D-25 Hidroxi") echo "selected"?>>Vitamina D-25 Hidroxi</option>
                        </select>
                    </div>
                    <div class="col-lg-2 col-sm-12">
                         <label>Preço:</label>
                         <input class="form-control" type="number" name="preco" min="5" max="1000" step="1.00" value="<?php echo $preco ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-lg-2 col-sm-12">
                        <label>data:</label>
                        <input class="form-control" type="date" name="data" min="2019-10-01" value="<?php echo $data ?>">
                    </div>
                    <div class="col-lg-2 col-sm-12">
                        <label>Hora:</label>
                        <input class="form-control" type="time" name="hora" value="<?php echo $horario?>">
                    </div>
                    <div class="col-lg-2 col-sm-12">
                        <label>Finalizado:</label>
                        <br>
                        <label class="mt-2">SIM</label>
                        <input class="mt-2" type="radio" name="concluido" value="1" <?php if($concluido == 1) echo "checked"?>>
                        <label class="mt-2">NÃO</label>
                        <input class="mt-2" type="radio" name="concluido" value="0"<?php if($concluido == 0) echo "checked"?>>
                    </div>
                    <div class="col-lg-5 col-sm-12">
                        <label>Anexo:</label>
                        <label>Visualizar Anexo Existente:</label><a href="anexos/<?php echo "$anexo"?>" target="_blank">Abrir</a>
                        <br>
                        <input type="file" name="anexo" size="50">
                    </div>
                </div> 
                <div class="form-group row">
                    <div class="col-12">
                        <label>Oberservações:</label><br>
                        <textarea class="form-control" rows="5" cols="150" name="obs"><?php echo $obs?></textarea>
                    </div>
                </div>
                <hr>
                <div class="form-group row">
                    <div class="col-3 col-lg-1">
                        <input class="btn btn-dark" type="submit" value="Alterar">
                    </div>
                    <div class="col-3 col-lg-1">
                        <input class="btn btn-dark" type="reset" value="Limpar">
                    </div>
                    <div class="col-3 col-lg-1"> 
                        <a class="btn btn-dark" href="listagemAnalise.php">Listagem</a>
                    </div>
                </div>
            </form>
            <br>
            
        </fieldset>
        </div>
        <?php include('../rodape.php')?>
        <script src="../node_modules/jquery/jquery.js"></script>
        <script src="../node_modules/popper.js/dist/umd/popper.js"></script>
        <script src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>
    </body>

</html>