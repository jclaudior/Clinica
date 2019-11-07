<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Listagem de Analises</title>
        <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.css">
    </head>
    <body>
        <?php
            $arquivo = substr(strrchr(__FILE__, DIRECTORY_SEPARATOR), 1);
            include('../cabecalho.php');
         ?>
         <div class="container-fluid">
            <br>
            <br>
            <h1 class="display-3">Listagem de Analises</h1>
            <?php
            require("../conexao.php");
            $sql = "SELECT * FROM ANALISE_MEDICA";

            $registro = mysqli_query($con,$sql) or die ("Erro ao Executar comando do sql " . mysqli_error($con));
            $linhas = mysqli_num_rows($registro);

            if($linhas < 1)
                die ("Analise Médicas esta vazia!");
        
            echo "Registros encontrados $linhas<br>";

            $cont = 0;
            echo"
                <table border='0' class='table'>
                    <tr>
                        <th>ID</th>
                        <th>ID Paciente</th>
                        <th>Tipo de Analise</th>
                        <th>Preço</th>
                        <th>Data da Analise</th>
                        <th>Hora da Analise</th>
                        <th>Finalizada</th>
                        <th>Anexos</th>
                        <th>Observações</th>
                        <th colspan='2'>Ação</th>
                    </tr>
            ";
            while($cont < $linhas){
            
                $dados = mysqli_fetch_array($registro);
            
                $id = $dados['id'];
                $idPaciente = $dados['idPaciente'];
                $tipoAnalise = $dados['tipoAnalise'];
                $preco = $dados['preco'];
                $dataAnalise = $dados['dataAnalise'];
                $horaAnalise = $dados['horarioAnalise'];
                $finalizado = $dados['concluido'];
                $anexo = $dados['anexo'];
                $obs = $dados['obs'];
            
                if($finalizado == 1)
                    $finalizado = "SIM";
                else
                    $finalizado = "NÃO";
            
                $dataAnalise =date("d/m/Y",strtotime($dataAnalise));

                $preco = number_format($preco,2,",",".");
                echo"
                    <tr>
                        <td>$id</td>
                        <td>$idPaciente</td>
                        <td>$tipoAnalise</td>
                        <td>$preco</td>
                        <td>$dataAnalise</td>
                        <td>$horaAnalise</td>
                        <td>$finalizado</td>
                ";
                        if($anexo<>"") echo"<td><a href='anexos/$anexo' target='_blank'>Abrir</a></td>";
                        else echo "<td>Sem Anexo</td>";
                echo "
                    <td>$obs</td>
                    <td><a href='exclusaoAnalise.php?id=$id'>Excluir</a></td>
                    <td><a href='alteraForm.php?id=$id'>Alterar</a></td>
                    </tr>
                ";
                $cont ++;
            }
            echo "</table>";
            echo "Listagem finalizada!";
            ?>
            <br>
            <a class="btn btn-dark" href="analiseForm.php">Cadastrar</a>
        </div>
            <?php include('../rodape.php')?>
            <script src="../node_modules/jquery/jquery.js"></script>
            <script src="../node_modules/popper.js/dist/umd/popper.js"></script>
            <script src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>
        </body>
    </html>