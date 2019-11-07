<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Exclusão Analise</title>
    </head>
    <body>
        <h2>Exclusão de Analise</h2>
        <?php
        require("../conexao.php");
        if(empty($_GET['id']))
            die("Chamada para exclusão invalida!");
            $id = $_GET['id'];
        echo "Excluindo analise $id<br>";

        $sql = "DELETE FROM ANALISE_MEDICA WHERE id=$id";
        
        mysqli_query($con,$sql) or die("Erro ao exluir analise " . mysqli_error($con));
        echo "Analise $id Exluida<br>";
        ?>
        <a href="listagemAnalise.php">Listagem de Analises</a>
    </body>
</html>