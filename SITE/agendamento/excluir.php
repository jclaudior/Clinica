<?php //excluir.php
$id = $_GET ["id"];
$con = mysqli_connect ('localhost', 'root','', 'sistema') or die("erro ao conectar o banco de dados ".mysqli_error($con));
$sql="delete  from agendamento where ProtocoloAgendamento=$id";
echo "excluindo Protocolo Agendamento $id<br>";
mysqli_query ($con, $sql) or die("erro ao excluir registro". mysqli_error ($con));
echo "$id excluido com sucesso<br>";
echo "<a href='listagem.php'>voltar</a>" 






?>