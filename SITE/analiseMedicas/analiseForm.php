<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Analises Médicas</title>
        <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.css">
    </head>
    <body>
        <?php
            $arquivo = substr(strrchr(__FILE__, DIRECTORY_SEPARATOR), 1);
            include('../cabecalho.php');
         ?>
        <div class="container mt-5">
        <br>
        <h1 class="display-3">Analises Médicas</h1>
        <hr>
            <form method="POST" id="formAnalise" name="formAnalise" action="cadAnalise.php" enctype="multipart/form-data">
                <div class="form-group row">
                    <div class="col-lg-4 col-sm-12">
                        <label>Cod. Paciente:</label>
                        <input type="number" name="codPaciente" class="form-control" min="0" placeholder="Digite o cod. do paciente" size="40">
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <label>Tipo de Analise:</label>
                        <select name="tipo" class="form-control">
                            <option value="">Selecione</option>
                            <option value="BetaHCG">Beta HCG</option>
                            <option value="Colesterol">Colesterol</option>
                            <option value="Glicose">Glicose</option>
                            <option value="Hemoglobina Glicada Fração A1c">Hemoglobina Glicada Fração A1c</option>
                            <option value="Hemograma Completo">Hemograma Completo</option>
                            <option value="PSA">PSA Total</option>
                            <option value="TGO">TGO – Transaminase Glutâmica Oxalacética</option>
                            <option value="TGP">TGP – Transaminase Glutâmico Pirúvica</option>
                            <option value="Triglicérides Soro">Triglicérides, Soro</option>
                            <option value="TSH Hormônio Tireoestimulante">TSH – Hormônio Tireoestimulante</option>
                            <option value="Urina Tipo 1">Urina Tipo 1</option>
                            <option value="Vitamina D-25 Hidroxi">Vitamina D-25 Hidroxi</option>
                        </select>
                    </div>
                    <div class="col-lg-2 col-sm-12">
                        <label>Preço:</label>
                        <input type="number" name="preco" class="form-control" min="5" max="1000" step="1.00">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-lg-2 col-sm-12">
                        <label>data:</label>
                        <input type="date" class="form-control" name="data" min="2019-10-01">
                    </div>
                    <div class="col-lg-2 col-sm-12">
                        <label>Hora:</label>
                        <input type="time" class="form-control" name="hora">
                    </div>
                    <div class="col-lg-2 col-sm-12">
                        <label class="mt-0">Finalizado:</label>
                        <br>
                        <label class="mt-1">SIM</label><input type="radio"  name="concluido" value="1">
                        <label class="mt-1">NÃO</label><input type="radio"  name="concluido" value="0" checked="">
                    </div>
                    <div class="col-lg-5 col-sm-12">
                        <label class="mt-4">Anexo:</label>
                        <input class="mt-4" type="file"  name="anexo" size="50">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-12">
                        <label>Oberservações:</label><br>
                        <textarea class="form-control" rows="5" cols="150" name="obs"></textarea>
                    </div>
                </div>
                <hr>
                <div class="form-group row">
                    <div class="col-3 col-lg-1">
                        <input class="btn btn-dark" type="submit" value="Cadastrar">
                    </div>
                    <div class="col-3 col-lg-1">
                        <input class="btn btn-dark" type="reset" value="Limpar">
                    </div>
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