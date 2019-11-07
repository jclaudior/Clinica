<?php //excluir.php
$id = $_GET ["id"];
include('../conexao.php');
$sql="delete  from agendamento where ProtocoloAgendamento=$id";
echo "excluindo Protocolo Agendamento $id<br>";
mysqli_query ($con, $sql) or die("erro ao excluir registro". mysqli_error ($con));
echo "$id excluido com sucesso<br>";
echo "<a href='listagem.php'>voltar</a>" 






?>