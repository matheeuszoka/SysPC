<?php
$id=$_POST["id"];
$entidade=$_POST["entidade"];
$setor=$_POST["setor"];
$responsavel=$_POST["responsavel"];
$data=$_POST["data"];
$senha=$_POST["senha"];
$resolucao=$_POST["resolucao"];
$anydesk=$_POST["anydesk"];
$PassANY=$_POST["PassANY"];
$hostname=$_POST["hostname"];
$status=$_POST["status"];
include("../conexao.php");



$update = "UPDATE contratos SET status='$status' WHERE id=$id";

$insere = "INSERT INTO  closed_manutencao (entidade, setor, responsavel, data, senha, resolucao, anydesk, PassANY,hostname, status) VALUES ('$entidade', '$setor', '$responsavel', '$data', '$senha', '$resolucao','$anydesk','$PassANY','$hostname', '$status')";
mysqli_query($conexao, $insere);
mysqli_query($conexao,$update);
echo "$insere";

header("Location: ../../sistema.php");



?>