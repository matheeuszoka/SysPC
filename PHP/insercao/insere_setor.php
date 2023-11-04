<?php
$entidade=$_POST["entidade"];
$telefone=$_POST["telefone"];
$resAtual=$_POST["resAtual"];
$setor=$_POST["setor"];

include("../conexao.php");

$insere= "insert into setor (setor,telefone,responsavel,entidade) values ('$setor', '$telefone', '$resAtual', '$entidade')";
mysqli_query($conexao, $insere);



header("Location: ../../cad_setor.php");



?>