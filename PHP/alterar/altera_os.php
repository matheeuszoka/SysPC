<?php
include("../conexao.php");
$id = $_POST['id'];
$cliente = $_POST['cliente'];
$telefone = $_POST['telefone'];
$data = $_POST['data'];
$senha = $_POST['senha'];
$problema = $_POST['problema'];
$update = "UPDATE os SET cliente='$cliente',telefone='$telefone', data='$data',senha='$senha', problema='$problema' WHERE id=$id";
mysqli_query($conexao, $update);

echo "$update";
header("Location: ../../sistema.php");

?>