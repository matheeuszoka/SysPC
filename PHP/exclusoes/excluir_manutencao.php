<?php 


$id=$_GET['id'];

include("../conexao.php");

mysqli_query($conexao, "delete from contratos where id= $id");

header("Location: ../../aberto_manutencao.php");

?>