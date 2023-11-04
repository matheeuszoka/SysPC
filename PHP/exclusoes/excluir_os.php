<?php 


$id=$_GET['id'];

include("../conexao.php");

mysqli_query($conexao, "delete from os where id= $id");

header("Location: ../../aberto_os.php");

?>