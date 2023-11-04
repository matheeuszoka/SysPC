<?php
$entidade=$_POST["entidade"];
$telefone=$_POST["telefone"];
$resAtual=$_POST["resAtual"];
$cidade=$_POST["cidade"];

include("../conexao.php");

$insere= "insert into entidade (entidade,telefone,responsavel,cidade) values ('$entidade', '$telefone', '$resAtual', '$cidade')";
mysqli_query($conexao, $insere);



header("Location: ../../cad_entidade.php");



?>