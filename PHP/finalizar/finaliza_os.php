<?php
include("../conexao.php");
$id=$_POST["id"];
$cliente=$_POST["cliente"];
$telefone=$_POST["telefone"];
$data=$_POST["data"];
$saida=$_POST["saida"];
$problema=$_POST["prob"];
$resol=$_POST["resol"];
$obs=$_POST["obs"];
$servico=$_POST["servico"];
$valor=$_POST["valor"];
$status=$_POST["status"];

$insere= "INSERT INTO closed_os (cliente, telefone, dentrada, saida, problema, resolucao, obs, servico, valor, status) VALUES ('$cliente', '$telefone', '$data', '$saida', '$problema', '$resol', '$obs', '$servico', '$valor', '$status')";

$update = "UPDATE os SET status='$status' WHERE id=$id";

mysqli_query($conexao,$insere);
mysqli_query($conexao,$update);
header("location:../../sistema.php");