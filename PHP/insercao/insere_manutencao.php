<?php
$entidade=$_POST["entidade"];
$setor=$_POST["setor"];
$responsavel=$_POST["responsavel"];
$data=$_POST["data"];
$senha=$_POST["senha"];
$problema=$_POST["problema"];
$status=$_POST["status"];
include("../conexao.php");




$insere= "insert into contratos (entidade,setor,nome,data,senha,problema,status) values ('$entidade', '$setor', '$responsavel', '$data', '$senha','$problema','$status')";
mysqli_query($conexao, $insere);


header("Location: ../../sistema.php");



?>